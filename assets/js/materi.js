$(document).ready(function () {
	// otomatis membuka accordion pertama
	collapseFirst = function () {
		let accordion = $(".accordion-item:first-child");
		accordion.find(".accordion-button").removeClass("collapsed");
		accordion.find(".accordion-collapse").addClass("show");
	};

	//   ------------------------------   ///
	//   Detail Course

	var id = window.location.pathname.split("/").pop();
	var urlMateri = "https://lms.lazy2.codes/api/course/detail/" + id;
	$.ajax({
		url: urlMateri,
		type: "GET",
		dataType: "JSON",
		success: function (result) {
			// console.log(result);
			$(".title_course").html(result.title);
			$(".old_price").html("<s>Rp. " + result.old_price + "</s>");
			$(".new_price").html("Rp. " + result.new_price);
			$(".description").html(result.description);

			let data = result.video;
			$.each(data, function (i, materi) {
				$("#list-materi").append(
					`
		<div class="accordion-item">
		    <h2 class="accordion-header" id="flush-heading${i}">
		        <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse${i}" aria-expanded="false" aria-controls="flush-collapse${i}">
			  ${i + 1}. ${materi.title}
		        </button>
		    </h2>
		    <div id="flush-collapse${i}" class="accordion-collapse collapse" aria-labelledby="flush-heading${i}">
		        <div class="accordion-body p-0">
			  <div class="nav-link" data-video="${materi.video}">
			  <a href="" class="video">Video</a>
                            <a href="" class="quiz">Quiz</a>
                            <a href="" class="resume">Resume</a>
			  </div>
		        </div>
		    </div>
		</div>
	      `
				);
			});
			collapseFirst();
			alertFunc();
		},
	});

	alertFunc = function () {
		var video = $(".video");
		var quiz = $(".quiz");
		var resume = $(".resume");
		video.click(function (e) {
			e.preventDefault();
			alert("Silahkan login terlebih dahulu");
		});
		quiz.click(function (e) {
			e.preventDefault();
			alert("Pastikan video sudah di tonton sampai selesai");
		});
		resume.click(function (e) {
			e.preventDefault();
			alert("Selesaikan quiz terlebih dahulu");
		});
		$("#detail-course img").click(function () {
			window.location.href = "/auth";
		});
	};
});
