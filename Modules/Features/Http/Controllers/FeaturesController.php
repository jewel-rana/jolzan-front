<?php

namespace Modules\Features\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Features\Entities\Feature;
use Modules\Features\FeatureService;
use Modules\Features\Http\Requests\FeatureCreateRequest;
use Modules\Features\Http\Requests\FeatureUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class FeaturesController extends Controller
{
    /**
     * @var FeatureService
     */
    private $features;

    public function __construct(FeatureService $featureService)
    {
        $this->features = $featureService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if($request->wantsJson()) {
            $features = Feature::select(['id', 'title', 'type', 'description', 'created_at']);

            return Datatables::of($features)
                ->filter(function ($query) use ($request) {
                    if ($request->has('title')) {
                        $query->where('title', 'like', "%{$request->get('title')}%");
                    }
                })
                ->addColumn('thumb', function($feature) {
                    $thumb = ($feature->medias->count()) ? asset($feature->medias->first()->attachment) : asset('default/thumb.png');
                    return "<img src='" . $thumb . "' class='table-img'>";
                })
                ->addColumn('action', function($feature) {
                    return "<a href='" . route('features.edit', $feature->id) . "' class='btn btn-outline-secondary'>Edit</a>";
                })
                ->rawColumns(['thumb', 'action'])
                ->make(true);
        }
        return view('features::index')->withTitle('Features');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        $type = request()->get('type') ?? 'feature';
        return view('features::create', compact('type'))->withTitle('Add new ' . $type);
    }

    /**
     * Store a newly created resource in storage.
     * @param FeatureCreateRequest $request
     * @return RedirectResponse
     */
    public function store(FeatureCreateRequest $request): RedirectResponse
    {
        try {
            $this->features->create($request->validated());
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            session()->flash($exception->getMessage());
            return redirect()->back()->withInput($request->all());
        }

        return redirect()->route('features.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('features::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Feature $feature)
    {
        return view('features::edit', compact('feature'))->withTitle('Update feature');
    }

    /**
     * Update the specified resource in storage.
     * @param FeatureUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(FeatureUpdateRequest $request, $id): RedirectResponse
    {
        try {
            $this->features->update($request->validated(), $id);
        } catch (\Throwable $exception) {
            session()->flash($exception->getMessage());
            return redirect()->back()->withInput($request->all());
        }

        return redirect()->route('features.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        if($this->features->delete($id)) {
            session()->flash('error', 'Your feature delete request success');
        }
        return redirect()->back();
    }
}
