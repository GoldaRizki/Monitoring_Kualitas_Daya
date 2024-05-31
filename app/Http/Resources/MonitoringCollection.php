<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MonitoringCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $collection = $this->collection;
        return [
           'tegangan' => $collection->map(function ($item, $key){
                return [
                    'x' => $item->waktu,
                    'y' => $item->tegangan
                ];
           })->toArray(),
           'arus' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->arus
            ];
            })->toArray(),
            'faktor_daya' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->faktor_daya
            ];
            })->toArray(),
            'daya_aktif' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->daya_aktif
            ];
            })->toArray(),
            'daya_reaktif' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->daya_reaktif
            ];
            })->toArray(),
            'daya_semu' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->daya_semu
            ];
            })->toArray(),
            'total_daya_aktif' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->total_daya_aktif
            ];
            })->toArray(),
            'total_daya_reaktif' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->total_daya_reaktif
            ];
            })->toArray(),
           'total_daya_semu' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->total_daya_semu
            ];
            })->toArray(),
            'total_faktor_daya' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->total_faktor_daya
            ];
            })->toArray(),
            'frekuensi' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->frekuensi
            ];
            })->toArray(),
            'reactive_power_demand' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->reactive_power_demand
            ];
            })->toArray(),
            'apparent_power_demand' => $collection->map(function ($item, $key){
            return [
                'x' => $item->waktu,
                'y' => $item->apparent_power_demand
            ];
            })->toArray(),
        ];
    }
}
