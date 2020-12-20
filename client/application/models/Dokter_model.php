<?php 
use GuzzleHttp\Client;
class Dokter_model extends CI_model {
    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/RestApi-medis/server/index.php/'
        ]);
    }

    public function getAllDokter()
    {
        $response =$this->_client->request('GET', 'dokter', [
            'query' => [
                'API-KEY' => '080599'
            ],
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getDokterById($id)
    {
         $response =$this->_client->request('GET', 'dokter', [
            'query' => [
                'id' => $id,
                'API-KEY' => '080599'
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result[0];
        
    }

    public function ubahDataDokter()
    {
        $data = [
            
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "umur" => $this->input->post('umur', true),
            "id" => $this->input->post('id', true),
            'API-KEY' => '080599',
            
        ];

        $response =$this->_client->request('PUT', 'dokter', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function tambahDataDokter()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "umur" => $this->input->post('umur', true),
            'API-KEY' => '080599'
        ];

        $response =$this->_client->request('POST', 'dokter', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

   

    public function hapusDataDokter($id)
    {
        $response =$this->_client->request('DELETE', 'dokter', [
            'form_params' => [
                'id' => $id,
                'API-KEY' => '080599'
            ],
        ]);

        return $result['data'][0];
    }
    
}