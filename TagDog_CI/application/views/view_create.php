            <h4 id="create">CREATE<small class="span1"><i class="icon-plus"></i></small></h4>
            <p>
            <small>Type and you shall receive.</small>
            <div id="create_container">
                <div class="create_text">
		<form onsubmit="createTAG(); return false;">
                    <input id="fname_create" placeholder="Name" type="text" />
                    <input id="lname_create" placeholder="Address" type="text" />
                    <input id="user_text" placeholder="Phone"type="text" />
                    <input id="user_text" placeholder="Item" type="text" />
                    <input type="submit" value="create" />
		</form>
                </div>
                <div class="create_box">
                    <img id="QR_code" alt=" No QR code :(">
                    <script>
                        function createTAG()
                        {
                            var URL="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl="
                            var fname=document.getElementById("fname_create").value;
                            var lname=document.getElementById("lname_create").value;
                            var TAG=document.getElementById("QR_code");
                            TAG.src=URL+fname+lname;
			    jQuery("button#share_button_preview").html("<img src='"+URL+fname+lname+"' />");
                        }
                    </script>
                    box
                </div>
            </div>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </br>
	    </p>
