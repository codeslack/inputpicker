<?php require_once "./header.php" ?>
<style>
	ul.list-unstyled{
		margin-bottom:-10px;
	}
	ul.list-unstyled li{
		border-bottom:1px solid #dddddd;
		margin-bottom: 5px;
		padding-bottom: 5px;
	}
	ul.list-unstyled li:last-child{
		border-bottom: 0px;

	}
	.alert-message{
		margin-bottom:0px;
		padding:2px;
	}
</style>

	<div class="container">
		<div class="row">
			<div class="col-sm-3 pull-right hidden-xs hidden-sm">
				<div class="ip-side-bar">
					<ul class="nav nav-pills nav-stacked ip-side-nav" data-spy="affix" data-offset-top="55">
						<li><a href="#options">Options</a>
						</li>
						<li><a href="#html">HTML</a>
						</li>
						<li><a href="#css">CSS</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="ip-content" style="">

					<!-- Start examples-->
					<a name="options"></a>
					<h2>Options</h2>
					<!-- Begin section 1 -->
					<?php $test_index++; ?>
					<section class="row">
						<div class="col-sm-12">
							<p>
								Initiate a basic input with multiple options
							</p>
							<h3>Basic</h3>
							<table class="table table-bordered">
								<thead>
								<tr class="active">
									<th>Name</th>
									<th>Format</th>
									<th>Description</th>
									<th style="width:50%;">Example</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>width</td>
									<td>String</td>
									<td>Set width for the list</td>
									<td>
										<ul class="list-unstyled">
											<li>"100%" - equal with input</li>
											<li>"200px" - 200px</li>
										</ul>
									</td>
								</tr>
                                <tr>
                                    <td>height</td>
                                    <td>String</td>
                                    <td>Set height for the list</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>"200px" - 200px</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>autoOpen</td>
                                    <td>Bool</td>
                                    <td>The list would / would not open when the input is focused</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>true - Open automatically</li>
                                            <li>false - Not open</li>
                                        </ul>
                                    </td>
                                </tr>
								<tr>
									<td>headShow</td>
									<td>Bool</td>
									<td>Set whether showing the list head</td>
									<td>
										<ul class="list-unstyled">
											<li>true - show head</li>
											<li>false - hide head</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>fields</td>
									<td>Array</td>
									<td>Set fields for the list</td>
									<td>
										<ul class="list-unstyled">
											<li>"{String}" - ["value", "text", "country"]</li>
											<li>"{Object}" - [{"name":"value", "text":"Code"}, {"name":"text", "text":"Area"}, {"name":"country", "text":"Country"}]</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>fieldValue</td>
									<td>String</td>
									<td>Set the field which would be passed to the input value</td>
									<td>
										<ul class="list-unstyled">
											<li>"value" - the attribute "value" will be passed to the value. </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>fieldText</td>
									<td>String</td>
									<td>Set the field which would be shown on the screen</td>
									<td>
										<ul class="list-unstyled">
											<li>"text" - the attribute "text" will be shown on the screen. </li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>


							<h3>Data</h3>
							<table class="table table-bordered">
								<thead>
								<tr class="active">
									<th>Name</th>
									<th>Format</th>
									<th>Description</th>
									<th style="width:50%;">Example</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>data</td>
									<td>Array</td>
									<td>Set data for the list
										<div class="alert alert-info small alert-message" role="alert">Only valid when "url" is empty.</div>
									</td>
									<td>
										<ul class="list-unstyled">
											<li>["a", "b", "c"]</li>
											<li>[{"value":"AKL", "text":"Auckland", "country":"NZ"}, {"value":"WLG", "text":"Wellington", "country":"NZ"}]</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>url</td>
									<td>String</td>
									<td>Set remote data source for the list
									</td>
									<td>
										<ul class="list-unstyled">
											<li>"../src/example-regions.json"</li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>


							<h3>Filter</h3>
							<table class="table table-bordered">
								<thead>
								<tr class="active">
									<th>Name</th>
									<th>Format</th>
									<th>Description</th>
									<th style="width:50%;">Example</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>filterOpen</td>
									<td>Bool</td>
									<td>Set whether filter list when inputting the content</td>
									<td>
										<ul class="list-unstyled">
											<li>true - the list will be filtered by inputting. </li>
											<li>false - the list will not be filtered. </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>filterType</td>
									<td>String</td>
									<td>Set the filter type when filterOpen is true </td>
									<td>
										<ul class="list-unstyled">
											<li>"start" - match contents from the beginning. </li>
											<li>"{any others}" - match contents from the whole content. </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>filterField</td>
									<td>String / Array</td>
									<td>Set the filter type when filterOpen is true </td>
									<td>
										<ul class="list-unstyled">
											<li>"" - match in all fields. </li>
											<li>"value" - match the field "value". </li>
											<li>["value", "text"] - match the field "value" and "text". </li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<script>
                            $(function () {
                                $('#test<?php echo $test_index ?>').inputpicker({
                                    data:[ "Text 1", "Text 2", "Text 3" ]
                                });
                            });
						</script>

					</section>
					<!-- End Section -->


					<!-- Start examples-->
					<a name="html"></a>
					<h2>HTML</h2>
					<!-- Begin section 1 -->
					<?php $test_index++; ?>
					<section class="row">
						<div class="col-sm-12">
							<a name="basic-single"></a>
							<h3>Structure</h3>
							<p>
								When using the Inputpicker plugin, it clones the original object to a new object
							</p>
							<h4>Original code</h4>
							<pre><code class="html"><?php echo ip_html("<input name=\"original\" type=\"text\" />");
									?></code></pre>
							<h4>After Loaded</h4>
							<pre><code class="html"><?php echo ip_html("<input name=\"original\" type=\"hidden\" class=\"inputpicker-original inputpicker-original-5\" data-inputpicker-uuid=\"5\" />
<div id=\"inputpicker-div-5\" class=\"inputpicker-div\">
<input id=\"inputpicker-5\" name=\"inputpicker-5\" class=\"inputpicker-input\" data-inputpicker-uuid=\"5\" data-inputpicker-settings=\"{json}\" data-inputpicker-data={json} />
<span class=\"inputpicker-arrow\" data-inputpicker-uuid=\"5\"><b></b></span>
</div>

<div id=\"inputpicker-wrapped-list\" style=\"position:absolute;\" data-inputpicker-uuid=\"5\">
<table class=\"table\">
<thead>
<tr><th></th></tr>
</thead>
<tbody>
<tr class=\"inputpicker-wrapped-element inputpicker-wrapped-element-{i}\" data-i=\"0\">...</tr>
<tr class=\"inputpicker-wrapped-element selected\" data-i=\"1\">...</tr>
</tbody>
</table>
</div>
");
									?></code></pre>
						</div>
					</section>
					<!-- End Section -->


					<!-- Start examples-->
					<a name="css"></a>
					<h2>CSS</h2>
					<!-- Begin section 1 -->
					<?php $test_index++; ?>
					<section class="row">
						<div class="col-sm-12">
							<p>
								You can customise style by your requirements
							</p>
							<h4>Style</h4>
							<pre><code class="css"><?php echo ip_html(file_get_contents('../src/jquery.inputpicker.css'));
									?></code></pre>
						</div>
					</section>
					<!-- End Section -->
				</div>

			</div>
		</div>
	</div>

<?php require_once "./footer.php" ?>