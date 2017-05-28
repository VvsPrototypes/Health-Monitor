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
        { "values":[307,301,300,309,315,312,307,305,308,310,311,311,310,304,304,304,301,302,303,303,302,305,315,32,322,324,329,350,372,374,310,309,309,308,308,306,305,303,302,300,299,297,296,295,294,294,294,295,298,298,301,301,296,292,292,293,289,290,294,295,294,293,293,292,289,288,290,294,295,294,295,295,292,293,292,289,288,293,295,290,286,287,290,289,288,289,289,285,286,287,286,282,284,288,285,281,282,281,278,281,287,290,286,284,286,288,285,286,290,288,283,282,285,283,277,280,288,289,289,300,323,338,342,333,302,234,152,123,131,133,166,214,256,295,319,330,334,332,334,335,334,332,337,341,341,341,343,346,346,348,354,357,354,353,359,366,367,367,373,381,387,392,398,399,399,403,408,408,400,394,391,382,370,358,344,328,316,315,313,304,297,293,290,287,290,292,292,287,286,289,291,290,289,289,289,289,294,299,298,293,293,297,296,295,297,298,296,295,297,297,296,298,301,299,297,302,304,302,297,298,301,298,295,299,301,298,296,299,302,299,297,302,304,299,296,298,300,299,298,298,299,303,309,313,309,306,306,302,296,296,301,304,301,299,305,310,312,326,351,364,360,335,286,205,142,136,145,163,207,255,302,334,343,350,357,356,353,354,355,355,357,361,363,362,366,370,369,364,366,373,376,378,383,386,388,390,398,407,411,413,417,420,420,422,424,423,419,413,405,393,378,368,361,350,338,327,319,309,303,306,310,307,304,305,303,300,299,304,308,305,303,305,305,303,306,310,308,301,304,315,318,311,308,309,310,306,306,310,308,308,309,309,310,314,317,316,309,305,306,306,308,315,319,316,314,317,319,313,305,301,297,299,304,310,317,317,316,323,324,320,316,314,311,304,298,301,305,303,307,315,325,337,356,369,370,350,314,244,166,140,146,159,204,253,298,335,351,353,354,357,356,354,352,357,359,362,366,373,374,377,379,376,372,374,378,377,375,384,392,391,401,418,423,418,416,421,427,424,423,419,412,405,400,400,397,384,368,350,336,329,324,316,306,297,302,316,317,308,303,305,308,309,309,308,305,305,305,303,302,304,307,309,305,310,317,314,310,311,312,311,311,311,306,303,310,319,321,313,305,306,310,312,311,314,319,322,321,321,316]}
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
