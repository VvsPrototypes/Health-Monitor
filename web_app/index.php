<html>
  <head>
    <script src="secure/zingchart.min.js"></script>
	
  </head>
  <body>
<div> 
<h4>Live Feed</h4>
    <object type="text/html" data="http://192.168.1.31:8080/?action=stream" width="800px" height="600px" style="overflow:auto;border:5px ridge blue">
    </object>
 </div>
  <div id ='airDiv'></div>  
<script type="text/javascript">
		var airData={
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
        { "values":[<?php $file = fopen("ECG.txt","r"); echo fgets($file); fclose($file); ?>]}
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
