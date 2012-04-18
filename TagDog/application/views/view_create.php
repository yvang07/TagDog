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
			    <button class="btn" />Code Will Appear Here</br><img id="QR_code" src=""/></button>
			    <script>
				function createTAG()
				{
				    var URL="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl="
				    var line1=document.getElementById("c_line1").value;
				    var line2=document.getElementById("c_line2").value;
				    var line3=document.getElementById("c_line3").value;
				    var line4=document.getElementById("c_line4").value;
				    var TAG=document.getElementById("QR_code");
				    TAG.src=URL+fname+lname;
				    jQuery("button#share_button_preview").html("<img src='"+URL+line1+line2+line3+line4"' />");
				}
			    </script>
		    </div>
		</div>
	    </p>
