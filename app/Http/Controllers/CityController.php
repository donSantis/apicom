<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Repositories\CityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CityController extends AppBaseController
{
    /** @var CityRepository $cityRepository*/
    private $cityRepository;

    public function __construct(CityRepository $cityRepo)
    {
        $this->cityRepository = $cityRepo;
    }

    /**
     * Display a listing of the City.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cities = $this->cityRepository->all();

        return view('cities.index')
            ->with('cities', $cities);
    }

    /**
     * Show the form for creating a new City.
     *
     * @return Response
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created City in storage.
     *
     * @param CreateCityRequest $request
     *
     * @return Response
     */
    public function store(CreateCityRequest $request)
    {
        $input = $request->all();

        $city = $this->cityRepository->create($input);

        Flash::success('City saved successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Display the specified City.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $city = $this->cityRepository->find($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        return view('cities.show')->with('city', $city);
    }

    /**
     * Show the form for editing the specified City.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $city = $this->cityRepository->find($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        return view('cities.edit')->with('city', $city);
    }

    /**
     * Update the specified City in storage.
     *
     * @param int $id
     * @param UpdateCityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCityRequest $request)
    {
        $city = $this->cityRepository->find($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        $city = $this->cityRepository->update($request->all(), $id);

        Flash::success('City updated successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Remove the specified City from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $city = $this->cityRepository->find($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('cities.index'));
        }

        $this->cityRepository->delete($id);

        Flash::success('City deleted successfully.');

        return redirect(route('cities.index'));
    }
}
