<?php
class ScheduleController
{
    private $scheduleDAO;
    private $busDAO;
    private $companyDAO;
    private $routeDAO;
    public function __construct()
    {
        $this->scheduleDAO = new ScheduleDAO();
        $this->busDAO = new BusDAO();
        $this->companyDAO = new CompanyDAO();
        $this->routeDAO = new RouteDAO();
    }

    public function index()
    {
        $schedules = $this->scheduleDAO->getAllSchedules();

        include_once 'app/view/schedule/index.php';
    }

    public function create()
    {
        $schedules = $this->scheduleDAO->getAllSchedules();
        $buses = $this->busDAO->getAllBuses();
        $companies = $this->companyDAO->getAllCompanies();
        $routes = $this->routeDAO->getAllRoutes();

        include_once 'app/view/schedule/create.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $date = $_POST['date'];
            $departureTime = $_POST['departureTime'];
            $arrivalTime = $_POST['arrivalTime'];
            $availableSeats = $_POST['availableSeats'];
            $busID = $_POST['bus'];
            $routeID = $_POST['route'];
            $companyID = $_POST['company'];
            $price = $_POST['price'];

            $selectedBus = $this->busDAO->getBusById($busID);
            $selectedRoute = $this->routeDAO->getRouteById($routeID);

            $schedule = new Schedule(null, $date, $departureTime, $arrivalTime, $availableSeats, $selectedBus, $selectedRoute, $companyID, $price);

            $this->scheduleDAO->addSchedule($schedule);

            header("Location: index.php?action=scheduleindex");
            exit();
        }
    }


    public function edit($scheduleID)
    {
        $schedules = $this->scheduleDAO->getAllSchedules();
        $buses = $this->busDAO->getAllBuses();
        $companies = $this->companyDAO->getAllCompanies();
        $routes = $this->routeDAO->getAllRoutes();
        $schedule = $this->scheduleDAO->getScheduleById($scheduleID);

        include_once 'app/view/schedule/edit.php';
    }

    public function update($scheduleID)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $departureTime = $_POST['departureTime'];
            $arrivalTime = $_POST['arrivalTime'];
            $availableSeats = $_POST['availableSeats'];
            $busID = $_POST['bus'];
            $routeID = $_POST['route'];
            $companyID = $_POST['company'];
            $price = $_POST['price'];

            $existingSchedule = $this->scheduleDAO->getScheduleById($scheduleID);

            // Update its properties
            $existingSchedule->setDate($date);
            $existingSchedule->setDepartureTime($departureTime);
            $existingSchedule->setArrivalTime($arrivalTime);
            $existingSchedule->setAvailableSeats($availableSeats);
            $existingSchedule->setBusID($busID);
            $existingSchedule->setRouteID($routeID);
            $existingSchedule->setCompanyID($companyID);
            $existingSchedule->setPrice($price);

            $this->scheduleDAO->updateSchedule($existingSchedule);

            header("Location: index.php?action=scheduleindex");
            exit();
        } else {
            // Display an error or redirect to the edit page with a message
        }
    }

    public function delete($scheduleID)
    {
        $schedule = $this->scheduleDAO->getScheduleById($scheduleID);
        // Display the delete confirmation page
        include_once 'app/view/schedule/delete.php';
    }

    public function destroy($scheduleID)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->scheduleDAO->deleteSchedule($scheduleID);

            header("Location: index.php?action=scheduleindex");
            exit();
        } else {
        }
    }
}