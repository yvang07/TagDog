            <h4 id="create">CREATE<small class="span1"><i class="icon-plus"></i></small></h4>
            <p>
            <small>Type and you shall receive.</small>
		<div class="row-fluid show-grid">
		    <div class="span6" id="create_left">
			    <form onsubmit="createTAG(); return false;">
				<input id="c_line1" placeholder="Name" type="text" />
				<input id="c_line2" placeholder="Address" type="text" />
				<input id="c_line3" placeholder="Phone"type="text" />
				<input id="c_line4" placeholder="Item" type="text" /></br>
				<button class="btn btn-info btn-large" type="submit" value="create" />Create</button>
			    </form>
		    </div>
		    <div class="span6" id="create_right">
			    <button class="btn"/>Code Will Appear Here</br><div id="QR_code"></div></button>
			    <script>
				function createTAG()
				{
				    var URL="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl="
				    var fname=document.getElementById("c_line1").value;
				    var lname=document.getElementById("c_line2").value;
				    var TAG=document.getElementById("QR_code");
				    jQuery("div#QR_code").html("<img src='"+URL+fname+lname+"' />");
				    jQuery("button#share_button_preview").html("<img src='"+URL+fname+lname+"' />");
				}
			    </script>
		    </div>
		</div>
	    </p>
