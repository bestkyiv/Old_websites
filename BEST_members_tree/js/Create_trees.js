function drawVisualization() {
	draw_AniaL_tree();
	draw_AniaSh_tree();
	draw_Zoia_tree();
	draw_Ira_tree();
}
google.setOnLoadCallback(drawVisualization);

function draw_Zoia_tree()
{
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'ToolTip');			  
    data.addRows(Zoia_tree.length);
	for(var i =0; i<Zoia_tree.length; i++)
	{
		var aString = "<img src='img/"+ Zoia_tree[i].name + ".jpeg'" + "onError='onImageError(\""+  Zoia_tree[i].name + "_img\"" + ")'" +
			"id='" + Zoia_tree[i].name + "_img'" +	" height=45 width=45 /><br/>" + 
			"<a href='http://vk.com/"+ Zoia_tree[i].vk + "'>" + Zoia_tree[i].name + "</a>";
		data.setCell(i, 0,  Zoia_tree[i].name, aString);	
		data.setCell(i, 1, Zoia_tree[i].angel);
		data.setCell(i, 2, Zoia_tree[i].tooltip);
	}           
     // Create and draw the visualization.
     var aChart = new google.visualization.OrgChart(document.getElementById('visualization1'));	 
	 aChart.draw(data, {allowHtml: true, allowCollapse : true});
}

function draw_Ira_tree()
{


	var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'ToolTip');			  
    data.addRows(Ira_tree.length);
	for(var i =0; i<Ira_tree.length; i++)
	{
		var aString = "<img src='img/"+ Ira_tree[i].name + ".jpeg'" + "onError='onImageError(\""+  Ira_tree[i].name + "_img\"" + ")'" +
			"id='" + Ira_tree[i].name + "_img'" +	" height=45 width=45 /><br/>" + 
			"<a href='http://vk.com/"+ Ira_tree[i].vk + "'>" + Ira_tree[i].name + "</a>";
		data.setCell(i, 0,  Ira_tree[i].name, aString);	
		data.setCell(i, 1, Ira_tree[i].angel);
		data.setCell(i, 2, Ira_tree[i].tooltip);
	}           
     // Create and draw the visualization.     
     var aChart = new google.visualization.OrgChart(document.getElementById('visualization2'));
	 aChart.allowCollapse = true;
	 aChart.draw(data, {allowHtml: true, allowCollapse : true});
}

function draw_AniaSh_tree()
{


	var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'ToolTip');			  
    data.addRows(AniaSh_tree.length);
	for(var i =0; i<AniaSh_tree.length; i++)
	{
		var aString = "<img src='img/"+ AniaSh_tree[i].name + ".jpeg'" + "onError='onImageError(\""+  AniaSh_tree[i].name + "_img\"" + ")'" +
			"id='" + AniaSh_tree[i].name + "_img'" +	" height=45 width=45 /><br/>" + 
			"<a href='http://vk.com/"+ AniaSh_tree[i].vk + "'>" + AniaSh_tree[i].name + "</a>";
		data.setCell(i, 0,  AniaSh_tree[i].name, aString);	
		data.setCell(i, 1, AniaSh_tree[i].angel);
		data.setCell(i, 2, AniaSh_tree[i].tooltip);
	}           
     // Create and draw the visualization.     
     var aChart = new google.visualization.OrgChart(document.getElementById('visualization3'));
	 aChart.allowCollapse = true;
	 aChart.draw(data, {allowHtml: true, allowCollapse : true});
}

function draw_AniaL_tree()
{

	var aString;
	var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'ToolTip');			  
    data.addRows(AniaL_tree.length);
	for(var i =0; i<AniaL_tree.length; i++)
	{	
		var aString = "<img src='img/"+ AniaL_tree[i].name + ".jpeg'" + "onError='onImageError(\""+  AniaL_tree[i].name + "_img\"" + ")'" +
			"id='" + AniaL_tree[i].name + "_img'" +	" height=45 width=45 /><br/>" + 
			"<a href='http://vk.com/"+ AniaL_tree[i].vk + "'>" + AniaL_tree[i].name + "</a>";
		data.setCell(i, 0,  AniaL_tree[i].name, aString);		
		data.setCell(i, 1, AniaL_tree[i].angel);
		data.setCell(i, 2, AniaL_tree[i].tooltip);
	}           
     // Create and draw the visualization.
     var aChart = new google.visualization.OrgChart(document.getElementById('visualization4'));
	 aChart.allowCollapse = true;
	 aChart.draw(data, {allowHtml: true, allowCollapse : true});
}

function onImageError(id)
{
	document.getElementById(id).src = "img/default_face.jpeg";
}