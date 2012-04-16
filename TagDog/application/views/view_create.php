            <h4 id="create">CREATE<small class="span1"><i class="icon-plus"></i></small></h4>
            <p>
            <small>Type and you shall receive.</small>
            <div id="create_container">
		<div class="row-fluid show-grid">
		    <div class="span5 offset1" id="create_left">
			    <form onsubmit="createTAG(); return false;">
				<input id="c_line1" placeholder="Name" type="text" />
				<input id="c_line2" placeholder="Address" type="text" />
				<input id="c_line3" placeholder="Phone"type="text" />
				<input id="c_line4" placeholder="Item" type="text" />
				<input type="submit" value="create" />
			    </form>
		    </div>
		    <div class="span5 offset1" id="create_right">
			    <img id="QR_code" alt=" No QR code :(">
			    <script>
				function createTAG()
				{
				    var URL="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl="
				    var fname=document.getElementById("c_line1").value;
				    var lname=document.getElementById("c_line2").value;
				    var TAG=document.getElementById("QR_code");
				    TAG.src=URL+fname+lname;
				    jQuery("button#share_button_preview").html("<img src='"+URL+fname+lname+"' />");
				}
			    </script>
		    </div>
		</div>
            </div>
	    <!--</br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br> -->
	    </p>
