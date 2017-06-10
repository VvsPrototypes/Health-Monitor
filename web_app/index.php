<html>
  <head>
    <script src="secure/zingchart.min.js"></script>
	
  </head>
  <body>
<div>


	<table style="width:100%">
  <tr style="margin: 0 auto; width: 400px;">
    <h4>Live Feed</h4>
    <td><object type="text/html" data="http://192.168.1.31:8080/?action=stream" align="middle" width="800px" height="600px" style="overflow:auto;border:5px ridge white">
    </object> </td>
  </tr>
     <tr>
  <td><span align="middle" style="font-weight:bold;font-size: 30px;">Body Temperature<?php $myfile = fopen("Temp.txt", "r"); echo fread($myfile,filesize("Temp.txt")); fclose($myfile); ?></td></span>
  <td><span align="middle" style="font-weight:bold;font-size: 30px;">Pulse<?php $myfile = fopen("Pulse.txt", "r"); echo fread($myfile,filesize("Pulse.txt")); fclose($myfile); ?></td></span>
  </tr>
  <tr>
    <td> <div id ='airDiv'></div>  </td>
    <td><div id ='ecgDiv'></div>  </td>
  </tr>
  </table>

 </div>
 
  
<script type="text/javascript">

  var ecgData={
    "type":"line",  // Specify your chart type here.
	"background-color":"",
	 	   "title":{  
       "text": "ECG"  
     },  
     "subtitle":{  
       "text": ""  
     },  
	 "scale-x":{
    "line-color":"none",
    "item":{
      "visible":false
    },
    "tick":{
      "line-color":"none"
    }
  },
  "scale-y":{
    "line-color":"none",
    "item":{
      "visible":false
    },
    "tick":{
      "line-color":"none"
    }
  },
    "series":[  // Insert your series data here.
        { "values": [0]},
<<<<<<< HEAD
        { "values":[<?php $myfile = fopen("ECG.txt", "r"); echo fread($myfile,filesize("ECG.txt")); fclose($myfile); ?>]}
    ]
  };
  zingchart.render({ // Render Method[3]
    id:'ecgDiv',
    data:ecgData,
    height:400,
    width:600
  });
  
</script>
<script type="text/javascript">

  var airData={
    "type":"line",  // Specify your chart type here.
	"background-color":"",
	 	   "title":{  
       "text": "BREATH"  
     },  
     "subtitle":{  
       "text": ""  
     },  
	 "scale-x":{
    "line-color":"none",
    "item":{
      "visible":false
    },
    "tick":{
      "line-color":"none"
    }
  },
  "scale-y":{
    "line-color":"none",
    "item":{
      "visible":false
    },
    "tick":{
      "line-color":"none"
    }
  },
    "series":[  // Insert your series data here.
        { "values": [0]},
        { "values":[<?php $myfile = fopen("BREATH.txt", "r"); echo fread($myfile,filesize("BREATH.txt")); fclose($myfile); ?>]}
=======
        { "values":[<?php $file = fopen("ECG.txt","r"); echo fgets($file); fclose($file); ?>]}
>>>>>>> origin/master
    ]
  };
  zingchart.render({ // Render Method[3]
    id:'airDiv',
    data:airData,
    height:400,
    width:600
  });
  
</script>

</body>

</html>
