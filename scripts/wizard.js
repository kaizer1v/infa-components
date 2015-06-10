/*
wizard = (function($) {
	var w = {}
	w.totalSteps = $(".wizard-steps thead tr td").length - 1 // -1 because last step is an empty td
	w.wizardSteps = $(".wizard-steps thead tr td")
	
	w.getCurrActiveStep = function(step) {
		return $(".wizard-steps thead tr").children(".active")
	}
	
	w.activateStep = function(step) {
		step = parseInt(step)
	
		if(step <= w.totalSteps) {
			
			$(".btn-next").removeClass("disabled")
			$(".btn-prev").removeClass("disabled")
			
			if(step == 1) {
				$(".btn-next").removeClass("disabled")
				$(".btn-prev").addClass("disabled")
			}
			
			if(step == w.totalSteps) {
				$(".btn-prev").removeClass("disabled")
				$(".btn-next").addClass("disabled")
			}
		
			// step
			w.wizardSteps.removeClass("active")
			$(".wizard-steps thead tr td:nth-child("+ step +")").addClass("active")
			
			// step-content
			$(".wizard-content div").removeClass("active")
			$(".wizard-content div:nth-child("+ step +")").addClass("active")
			
		}
	}
	
	$(document).on("click", ".wizard-steps thead tr td a", function(e) {
	// $(".wizard-steps thead tr td").on("click", "a", function(e) {
		e.preventDefault()
		currStep = $(this).attr("href")
		step = $(this).attr("href").substr(currStep.length - 1)
		w.activateStep(step)
	})


	$(document).on("click", ".wizard-actions .btn-next", function(e) {
	// $(".wizard-actions .btn-next").on("click", function() {
		
		if(!$(this).hasClass("disabled")) {
			currStep = w.getCurrActiveStep(w.wizardSteps).children().attr("href")
			nextStep = parseInt(currStep.substr(currStep.length - 1)) + 1
			
			$(this).attr("href", "#step"+nextStep)
			w.activateStep(nextStep)
		}

	})

	$(document).on("click", ".wizard-actions .btn-prev", function(e) {
	// $(".wizard-actions .btn-prev").on("click", function() {
		
		if(!$(this).hasClass("disabled")) {

			currStep = w.getCurrActiveStep("wizard-tabs").children().attr("href")
			prevStep = parseInt(currStep.substr(currStep.length - 1)) - 1
			
			$(this).attr("href", "#step"+prevStep)
			w.activateStep(prevStep)
		}
	})
	
	return w;
})(jQuery)
*/



/*wizard = */(function($) {
	var w = {}
	w.totalSteps = $(".wizard-steps thead tr td").length - 1 // -1 because last step is an empty td
	w.wizardSteps = $(".wizard-steps thead tr td")
	
	w.getCurrActiveStep = function(step) {
		return $(".wizard-steps thead tr").children(".active")
	}
	
	w.activateStep = function(step) {
		step = parseInt(step)
	
		if(step <= w.totalSteps) {
			
			$(".btn-next").removeClass("disabled")
			$(".btn-prev").removeClass("disabled")
			
			if(step == 1) {
				$(".btn-next").removeClass("disabled")
				$(".btn-prev").addClass("disabled")
			}
			
			if(step == w.totalSteps) {
				$(".btn-prev").removeClass("disabled")
				$(".btn-next").addClass("disabled")
			}
		
			// step
			w.wizardSteps.removeClass("active")
			$(".wizard-steps thead tr td:nth-child("+ step +")").addClass("active")
			
			// step-content
			$(".wizard-content div").removeClass("active")
			$(".wizard-content div:nth-child("+ step +")").addClass("active")
			
		}
	}
	
	$(document).on("click", ".wizard-steps thead tr td a", function(e) {
	// $(".wizard-steps thead tr td").on("click", "a", function(e) {
		e.preventDefault()
		currStep = $(this).attr("href")
		step = $(this).attr("href").substr(currStep.length - 1)
		w.activateStep(step);
	})


	$(document).on("click", ".wizard-actions .btn-next", function(e) {
	// $(".wizard-actions .btn-next").on("click", function() {
		
		if(!$(this).hasClass("disabled")) {
			currStep = w.getCurrActiveStep(w.wizardSteps).children().attr("href")
			nextStep = parseInt(currStep.substr(currStep.length - 1)) + 1
			
			$(this).attr("href", "#step"+nextStep)
			w.activateStep(nextStep)
		}

	})

	$(document).on("click", ".wizard-actions .btn-prev", function(e) {
	// $(".wizard-actions .btn-prev").on("click", function() {
		
		if(!$(this).hasClass("disabled")) {

			currStep = w.getCurrActiveStep("wizard-tabs").children().attr("href")
			prevStep = parseInt(currStep.substr(currStep.length - 1)) - 1
			
			$(this).attr("href", "#step"+prevStep)
			w.activateStep(prevStep)
		}
	})
	
	// return w;
})(jQuery)