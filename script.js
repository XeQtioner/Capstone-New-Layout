// Function to enter fullscreen mode
function enterFullscreen() {
	var elem = document.documentElement;
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.mozRequestFullScreen) {
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) {
		elem.msRequestFullscreen();
	}

	var fullscreenModal = document.getElementById("fullscreen-modal");
	fullscreenModal.style.display = "none";
}


// Show the fullscreen modal on page load
var fullscreenModal = document.getElementById("fullscreen-modal");
window.addEventListener("load", function () {
	if (window.innerWidth > 991) {
		

	fullscreenModal.style.display = "block";

} else	{
		fullscreenModal.style.display = "none";

	}
});


function openPage(pageName, elmnt, color) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].style.backgroundColor = "";
		tablinks[i].style.color = "";
	}
	document.getElementById(pageName).style.display = "block";
	elmnt.style.backgroundColor = color;
	elmnt.style.color = "black";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function casesType(evt, caseType) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("case-tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("case-tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(caseType).style.display = "flex";
	evt.currentTarget.className += " active";
}

function cases(evt, cases) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("cases");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("cases-tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cases).style.display = "block";
	evt.currentTarget.className += " active";
}

var div2Containers = document.querySelectorAll(".div2");

div2Containers.forEach(function (container) {
	var isDragging = false;
	var startX = 0;
	var scrollLeft = 0;

	container.addEventListener("mousedown", function (e) {
		isDragging = true;
		startX = e.clientX;
		scrollLeft = container.scrollLeft;

		container.classList.add("is-dragging");

		e.preventDefault();
	});

	window.addEventListener("mousemove", function (e) {
		if (!isDragging) return;

		var x = e.clientX - startX;
		container.scrollLeft = scrollLeft - x;
	});

	window.addEventListener("mouseup", function () {
		isDragging = false;
		container.classList.remove("is-dragging");
	});

	container.addEventListener("mouseleave", function () {
		if (isDragging) {
			isDragging = false;
			container.classList.remove("is-dragging");
		}
	});
});

var div2Containers = document.querySelectorAll(".div2");

div2Containers.forEach(function (container) {
	var items = container.querySelectorAll(".div2a");
	var selectedItemIndex = 0;

	// Function to set focus on the selected item
	function focusSelectedItem() {
		items[selectedItemIndex].focus();
	}

	// Keyboard navigation event listener
	window.addEventListener("keydown", function (e) {
		var currentRow = Math.floor(selectedItemIndex / 2); // Assuming 2 items per row

		if (e.key === "ArrowRight" && selectedItemIndex < items.length - 1) {
			selectedItemIndex++;
			focusSelectedItem();
		} else if (e.key === "ArrowLeft" && selectedItemIndex > 0) {
			selectedItemIndex--;
			focusSelectedItem();
		} else if (
			e.key === "ArrowDown" &&
			currentRow < Math.floor((items.length - 1) / 2)
		) {
			selectedItemIndex += 2;
			focusSelectedItem();
		} else if (e.key === "ArrowUp" && currentRow > 0) {
			selectedItemIndex -= 2;
			focusSelectedItem();
		}
	});

	container.addEventListener("wheel", function (e) {
		e.preventDefault();

		var scrollAmount = 190;
		var scrollDirection = e.deltaY > 0 ? 1 : -1;
		var targetScrollLeft =
			container.scrollLeft + scrollAmount * scrollDirection;

		// Use smooth scrolling with a transition
		container.scrollTo({
			left: targetScrollLeft,
			behavior: "smooth",
		});
	});
});
