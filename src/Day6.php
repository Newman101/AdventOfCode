<?php

class Day6 implements Day6Interface
{
    # Answer: 417916
    public function solvePartOne(): int
    {
        $objects = $this->getData();
        return $this->getOrbitCount($objects);
    }

    # Answer: 523
    public function solvePartTwo(): int
    {
        $objects = $this->getData();
        return $this->getMinOrbitalTransfers($objects);
    }

    protected function getData(): array
    {
        $input = trim(file_get_contents('data/input.txt'));
        $input = explode("\n", $input);
        return $input;
    }

    protected function getOrbitCount(array $input): int
    {
        $orbits = [];
        $orbitedBy = [];

        foreach ($input as $data) {
            $dataArray = explode(')', $data);
            $orbits[$dataArray[1]] = $dataArray[0];
            $orbitedBy[$dataArray[0]][] = $dataArray[1];
        }

        $orbitCount = 0;
        
        foreach ($orbits as $moon => $planet) {
            $orbitCount++;
            while (isset($orbits[$planet])) {
                $orbitCount++;
                $planet = $orbits[$planet];
            }
        }

        return $orbitCount;
    }

    protected function getMinOrbitalTransfers(array $input): int
    {
        $objects = [];

        foreach ($input as $data) {
            $orbit = explode(')', trim($data));
            $objects[$orbit[1]] = [
                'orbits' => $orbit[0]
            ];
        }

        $chainYOU = $this->getLinkChains($objects, 'YOU');
        $chainSAN = $this->getLinkChains($objects, 'SAN');

        $transferCount = 0;

        foreach ($chainYOU as $chainObjectYOU) {
            $transferCount++;
            if (in_array($chainObjectYOU, $chainSAN)) {
                $transferCount += array_search($chainObjectYOU, $chainSAN) - 1;
                break;
            }
        }

        return $transferCount;
    }

    protected function getLinkChains($objects, $objectName)
    {
        $linkchain = [];
        $object = $objects[$objectName];
    
        if ($object['orbits'] === 'COM') {
            array_push($linkchain, 'COM');
        } else {
            while (true) {
                array_push($linkchain, $object['orbits']);
                $object = $objects[$object['orbits']];
                if ($object['orbits'] === 'COM') {
                    array_push($linkchain, 'COM');
                    break;
                }
            }
        }
    
        return $linkchain;
    }
}
