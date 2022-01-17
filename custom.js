$( document ).ready(function() {
});

function addtocart(med_id){
	// alert("common.php?medid="+$("#medid").val()+"&quantity="+$("#quantity").val());
	// alert(med_id);
	window.location.href = "common.php?medid="+med_id+"&quantity="+$("#quantity").val();
}

function removeitem(med_id){alert(med_id);
	window.location.href = "common.php?medid="+med_id+"&type=remove";
}