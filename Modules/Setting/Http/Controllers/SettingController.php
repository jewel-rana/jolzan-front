<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Option;
use Modules\Setting\OptionServiceInterface;

class SettingController extends Controller
{
    /**
     * @var OptionServiceInterface
     */
    private $option;

    public function __construct(OptionServiceInterface $optionService)
    {
        $this->option = $optionService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $tab = request()->get('tab') ?? 'general';
        return view('setting::index', compact('tab'))->withTitle('Settings');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $this->option->save($request->except('tab', '_token', 'id'), $request->tab);
            session()->flash('success', 'Settings update successfully');
        } catch (\Throwable $exception) {
            session()->flash('error', $exception->getMessage());
        }

        return redirect()->route('setting.index', ['tab' => $request->tab ]);
    }

    public function _option_exist( $key ): bool
    {
        return (bool) Option::where(['field' => $key])->first();
    }
}
