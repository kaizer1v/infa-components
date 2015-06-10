$(document).on("click", ".modal-launch", openModal);
$(document).on("click", ".modal-close", closeModal);

function closeModal() {
	$modal = $(this).parents(".modal");
	$modal.children(".overlay").remove();
	$modal.hide(100);
}

function openModal() {
	$(this).siblings(".modal").prepend("<div class='overlay'></div>").show(100);
	$(this).siblings(".modal").children().show();
}