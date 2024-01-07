<?php


include_once 'DatabaseDAO.php';
include_once 'bus.php';
include_once 'CompanyDAO.php';

class BusDAO extends DatabaseDAO
{
    public function getAllBuses()
    {
        $query = "SELECT * FROM bus";
        $buses = array();
        $result = $this->fetchAll($query);
        foreach ($result as $row) {
            $CompanyDao = new CompanyDao();
            $company = $CompanyDao->getCompanyById($row['companyID']);

            $buses[] = new Bus($row['busID'], $row['busNum'], $row['licensePlate'], $company, $row['capacity']);

        }
        return $buses;
    }

    public function getBusById($busID)
    {
        $query = "SELECT * FROM bus WHERE busID = :busID";
        $params = [':busID' => $busID];
        $result = $this->fetch($query, $params);

       
        $companyDAO = new CompanyDAO();
        $company = $companyDAO->getCompanyById($result['companyID']);

        return new Bus($result['busID'], $result['busNum'], $result['licensePlate'], $company, $result['capacity']);
    }

    public function addBus($bus)
    {
        $busID = $bus->getBusID();
        $busNumber = $bus->getBusNumber();
        $licensePlate = $bus->getLicensePlate();
        $companyID = $bus->getCompanyID();
        $capacity = $bus->getCapacity();

        $query = "INSERT INTO bus (busID, busNum, licensePlate, companyID, capacity) 
                  VALUES (:busID, :busNumber, :licensePlate, :companyID, :capacity)";
        $params = [
            ':busID' => $busID,
            ':busNumber' => $busNumber,
            ':licensePlate' => $licensePlate,
            ':companyID' => $companyID,
            ':capacity' => $capacity
        ];

        $this->execute($query, $params);
    }

    public function updateBus($bus)
    {
        $busID = $bus->getBusID();
        $busNumber = $bus->getBusNumber();
        $licensePlate = $bus->getLicensePlate();
        $companyID = $bus->getCompanyID(); // This line is causing the issue
        $capacity = $bus->getCapacity();

        $query = "UPDATE bus SET busNum = :busNumber, licensePlate = :licensePlate, 
                  companyID = :companyID, capacity = :capacity 
                  WHERE busID = :busID";
        $params = [
            ':busID' => $busID,
            ':busNumber' => $busNumber,
            ':licensePlate' => $licensePlate,
            ':companyID' => $companyID,
            ':capacity' => $capacity
        ];

        $this->execute($query, $params);
    }


    public function deleteBus($busID)
    {
        $query = "DELETE FROM bus WHERE busID = :busID";
        $params = [':busID' => $busID];

        return $this->execute($query, $params);
    }
}