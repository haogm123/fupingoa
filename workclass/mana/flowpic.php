<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<link rel="stylesheet" href="template/jsPlumb/demo-all.css">     
        <link rel="stylesheet" href="template/jsPlumb/demo.css">
		<script type="text/javascript" src="template/jsPlumb/simpleyui-min.js"></script>
           <!-- JS -->
        <!-- support lib for bezier stuff -->
        <script src="template/jsPlumb/lib/jsBezier-0.6.js"></script>     
        <!-- jsplumb geom functions -->   
        <script src="template/jsPlumb/lib/jsplumb-geom-0.1.js"></script>
        <!-- jsplumb util -->
        <script src="template/jsPlumb/src/util.js"></script>
        <!-- base DOM adapter -->
        <script src="template/jsPlumb/src/dom-adapter.js"></script>        
        <!-- main jsplumb engine -->
        <script src="template/jsPlumb/src/jsPlumb.js"></script>
        <!-- endpoint -->
        <script src="template/jsPlumb/src/endpoint.js"></script>                
        <!-- connection -->
        <script src="template/jsPlumb/src/connection.js"></script>
        <!-- anchors -->
        <script src="template/jsPlumb/src/anchors.js"></script>        
        <!-- connectors, endpoint and overlays  -->
        <script src="template/jsPlumb/src/defaults.js"></script>
        <!-- bezier connectors -->
        <script src="template/jsPlumb/src/connectors-bezier.js"></script>
        <!-- state machine connectors -->
        <script src="template/jsPlumb/src/connectors-statemachine.js"></script>
        <!-- flowchart connectors -->
        <script src="template/jsPlumb/src/connectors-flowchart.js"></script>
        <script src="template/jsPlumb/src/connector-editors.js"></script>
        <!-- SVG renderer -->
        <script src="template/jsPlumb/src/renderers-svg.js"></script>
        <!-- canvas renderer -->
        <script src="template/jsPlumb/src/renderers-canvas.js"></script>
        <!-- vml renderer -->
        <script src="template/jsPlumb/src/renderers-vml.js"></script>
        
        <!-- yui jsPlumb adapter -->
        <script src="template/jsPlumb/src/yui.jsPlumb.js"></script>
        <!-- /JS -->  
		<script type="text/javascript">
		jsPlumb.ready(function() {
			var instance = jsPlumb.getInstance({
			// 默认拖动选项
			DragOptions : { cursor: 'pointer', zIndex:2000 },
			// 在覆盖装饰与每个连接。注意，该标签重叠使用一个函数来生成标签文字，在这种
			// 情况下，它返回'LabelText的'成员，我们在'初始化'下面的方法在每个连接上设置。
			ConnectionOverlays : [
				[ "Arrow", { location:0.993 } ],
				[ "Label", { 
					location:0.3,
					id:"label",
					cssClass:"aLabel"
				}]
			],
			Container:"flowchart-demo"
		});		

		// 这是油漆样式连接线..
		var connectorPaintStyle = {
			lineWidth:4,
			strokeStyle:"#61B7CF",
			joinstyle:"round",
			outlineColor:"white",
			outlineWidth:1
		},
		// ..这就是hover样式。
		connectorHoverStyle = {
			lineWidth:4,
			strokeStyle:"#216477",
			outlineWidth:1,
			outlineColor:"white"
		},
		endpointHoverStyle = {
			fillStyle:"#216477",
			strokeStyle:"#216477"
		},
		// 源端点（小蓝的）的定义
		sourceEndpoint = {
			endpoint:"Dot",
			paintStyle:{ 
				strokeStyle:"#7AB02C",
				fillStyle:"transparent",
				radius:0.1,
				lineWidth:0.1 
			},				
			isSource:true,
			connector:[ "Flowchart", { stub:[10, 25], gap:5, cornerRadius:5, alwaysRespectStubs:true } ],								                
			connectorStyle:connectorPaintStyle,
			hoverPaintStyle:endpointHoverStyle,
			connectorHoverStyle:connectorHoverStyle,
            dragOptions:{},
            overlays:[
            	[ "Label", { 
                	location:[0.5, 1.5], 
                	label:"",
                	cssClass:"endpointSourceLabel" 
                } ]
            ]
		},		
		// 目标端点的定义（当用户拖动一个连接会出现） 
		targetEndpoint = {
			endpoint:"Dot",					
			paintStyle:{ fillStyle:"#7AB02C",radius:1 },
			hoverPaintStyle:endpointHoverStyle,
			maxConnections:-1,
			dropOptions:{ hoverClass:"hover", activeClass:"active" },
			isTarget:true,			
            overlays:[
            	[ "Label", { location:[0.5, -0.5], label:"", cssClass:"endpointTargetLabel" } ]
            ]
		},			
		init = function(connection) {			
			connection.getOverlay("label").setLabel(connection.sourceId.substring(15) + "-" + connection.targetId.substring(15));
			connection.bind("editCompleted", function(o) {
				if (typeof console != "undefined")
					console.log("connection edited. path is now ", o.path);
			});
		};			

		var _addEndpoints = function(toId, sourceAnchors, targetAnchors) {
				for (var i = 0; i < sourceAnchors.length; i++) {
					var sourceUUID = toId + sourceAnchors[i];
					instance.addEndpoint("flowchart" + toId, sourceEndpoint, { anchor:sourceAnchors[i], uuid:sourceUUID });						
				}
				for (var j = 0; j < targetAnchors.length; j++) {
					var targetUUID = toId + targetAnchors[j];
					instance.addEndpoint("flowchart" + toId, targetEndpoint, { anchor:targetAnchors[j], uuid:targetUUID });						
				}
			};

		// 暂停绘画和初始化。
		instance.doWhileSuspended(function() {
		<?php
		$n=0;
		foreach ($result as $row) {
		$n++;
		?>
			_addEndpoints("Window<?php echo $n;?>", ["TopCenter", "BottomCenter"], ["LeftMiddle", "RightMiddle"]);			
		<?php }?>
						
			// 监听新的连接，初始化他们，我们在初始化启动时的连接方式相同。
			instance.bind("connection", function(connInfo, originalEvent) { 
				init(connInfo.connection);
			});			
						
			// 使所有的窗口可拖动的div						
			instance.draggable(jsPlumb.getSelector(".flowchart-demo .window"), { grid: [20, 20] });		

			// 连接数了
			<?php
			$n=0;
			foreach ($result as $row) {
			$n++;
				if($n<$num){
				?>
					instance.connect({uuids:["Window<?php echo $n;?>BottomCenter", "Window<?php echo $n+1;?>TopCenter"], editable:true});
				<?php
				}
					if($row['flowkey']==3){
						$flowkey4=explode(',',substr($row['flowkey4'], 0, -1));
						for($i=0;$i<sizeof($flowkey4);$i++){
						$user = $db->fetch_one_array("SELECT flownum FROM ".DB_TABLEPRE."workclass_flow  WHERE fid = '".$flowkey4[$i]."'");
					?>
						instance.connect({uuids:["Window<?php echo $n;?>LeftMiddle", "Window<?php echo $user['flownum'];?>RightMiddle"], editable:true});
					<?php
						}
					}
				//}
			}
			?>
			//instance.connect({uuids:["Window2LeftMiddle", "Window4LeftMiddle"], editable:true});
			//instance.connect({uuids:["Window4TopCenter", "Window4RightMiddle"], editable:true});
			//instance.connect({uuids:["Window3RightMiddle", "Window2RightMiddle"], editable:true});
			//instance.connect({uuids:["Window4BottomCenter", "Window1TopCenter"], editable:true});
			//instance.connect({uuids:["Window3BottomCenter", "Window1BottomCenter"], editable:true});
			//
			
			
		});
		
	});
		</script>
		<style type="text/css">
		<?php
		$n=0;
		$stytop=3;
		$styleft=5;
		foreach ($result as $row) {
		$n++;
		if($n>1) $stytop+=10;
		if($n%6==0){
			$stytop=3;
		}
		if($n%6==0){
			$styleft+=25;
		}
		if($n==1){
			$background=' background:#96dd7c;';
		}elseif($row['flowkey']==2){
			$background=' background:#f6b9ca;';
		}else{
			$background=' background:#f0f0f0;';
		}
		?>
		#flowchartWindow<?php echo $n;?> { top:<?php echo $stytop;?>em;left:<?php echo $styleft;?>em; <?php echo $background;?>}
		<?php }?>
		</style>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">
	<?php echo public_value('title','workclass_template','tplid='.$_GET['tplid']);?>&nbsp;&nbsp;流程图查看
	</span>
    </td>
  </tr>
</table>

<div class="demo flowchart-demo" id="flowchart-demo">
<?php
$n=0;
foreach ($result as $row) {
$n++;
?>
<div class="window" id="flowchartWindow<?php echo $n;?>"><strong>第 <span style="font-size:18px; font-weight:bold; color:#FF0000;"><?php echo $row['flownum']?>	</span>步:</strong><?php echo $row['flowname']?></div>
<?php }?>
</div> 

 
</body>
</html>
