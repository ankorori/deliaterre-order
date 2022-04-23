<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConmpanyDataRequest;
use App\Http\Requests\UpdateConmpanyDataRequest;
use App\Repositories\ConmpanyDataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ConmpanyDataController extends AppBaseController
{
    /** @var ConmpanyDataRepository $conmpanyDataRepository*/
    private $conmpanyDataRepository;

    public function __construct(ConmpanyDataRepository $conmpanyDataRepo)
    {
        $this->conmpanyDataRepository = $conmpanyDataRepo;
    }

    /**
     * Display a listing of the ConmpanyData.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $conmpanyDatas = $this->conmpanyDataRepository->all();

        return view('conmpany_datas.index')
            ->with('conmpanyDatas', $conmpanyDatas);
    }

    /**
     * Show the form for creating a new ConmpanyData.
     *
     * @return Response
     */
    public function create()
    {
        return view('conmpany_datas.create');
    }

    /**
     * Store a newly created ConmpanyData in storage.
     *
     * @param CreateConmpanyDataRequest $request
     *
     * @return Response
     */
    public function store(CreateConmpanyDataRequest $request)
    {
        $input = $request->all();

        $conmpanyData = $this->conmpanyDataRepository->create($input);

        Flash::success('Conmpany Data saved successfully.');

        return redirect(route('conmpanyDatas.index'));
    }

    /**
     * Display the specified ConmpanyData.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conmpanyData = $this->conmpanyDataRepository->find($id);

        if (empty($conmpanyData)) {
            Flash::error('Conmpany Data not found');

            return redirect(route('conmpanyDatas.index'));
        }

        return view('conmpany_datas.show')->with('conmpanyData', $conmpanyData);
    }

    /**
     * Show the form for editing the specified ConmpanyData.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conmpanyData = $this->conmpanyDataRepository->find($id);

        if (empty($conmpanyData)) {
            Flash::error('Conmpany Data not found');

            return redirect(route('conmpanyDatas.index'));
        }

        return view('conmpany_datas.edit')->with('conmpanyData', $conmpanyData);
    }

    /**
     * Update the specified ConmpanyData in storage.
     *
     * @param int $id
     * @param UpdateConmpanyDataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConmpanyDataRequest $request)
    {
        $conmpanyData = $this->conmpanyDataRepository->find($id);

        if (empty($conmpanyData)) {
            Flash::error('Conmpany Data not found');

            return redirect(route('conmpanyDatas.index'));
        }

        $conmpanyData = $this->conmpanyDataRepository->update($request->all(), $id);

        Flash::success('Conmpany Data updated successfully.');

        return redirect(route('conmpanyDatas.index'));
    }

    /**
     * Remove the specified ConmpanyData from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conmpanyData = $this->conmpanyDataRepository->find($id);

        if (empty($conmpanyData)) {
            Flash::error('Conmpany Data not found');

            return redirect(route('conmpanyDatas.index'));
        }

        $this->conmpanyDataRepository->delete($id);

        Flash::success('Conmpany Data deleted successfully.');

        return redirect(route('conmpanyDatas.index'));
    }
}
