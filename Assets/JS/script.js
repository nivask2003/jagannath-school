const autoClose = true;

document.querySelectorAll('.acc-item').forEach(el => {
  const summary = el.querySelector('summary');
  const wrapper = el.querySelector('.content-wrapper');

  summary.onclick = (e) => {
    e.preventDefault();
    const isOpen = el.classList.contains('is-open');

	if (isOpen) {
	  el.classList.remove('is-open');
	  wrapper.style.height = '0px';
	  setTimeout(() => el.open = false, 310);
	} else {
	  if (autoClose) {
		document.querySelectorAll('.acc-item.is-open').forEach(openItem => {
		  openItem.classList.remove('is-open');
		  openItem.querySelector('.content-wrapper').style.height = '0px';
		  setTimeout(() => openItem.open = false, 310);
		});
	  }
	  el.open = true;
      el.classList.add('is-open');
      wrapper.style.height = wrapper.querySelector('.content-body').scrollHeight + 'px';
	}
  };
});

document.addEventListener("DOMContentLoaded", function () {
    const firstItem = document.querySelector(".acc-item");

    if (firstItem) {
        const wrapper = firstItem.querySelector(".content-wrapper");

        firstItem.open = true;
        firstItem.classList.add("is-open");
        wrapper.style.height =
            wrapper.querySelector(".content-body").scrollHeight + "px";
    }
});


AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
    easing: "ease-in-out"
});

const navbar = document.getElementById("navbarNavDropdown");
const menuIcon = document.getElementById("menuIcon");

navbar.addEventListener("show.bs.collapse", function () {
    menuIcon.classList.remove("bi-list");
    menuIcon.classList.add("bi-x-lg");
});

navbar.addEventListener("hide.bs.collapse", function () {
    menuIcon.classList.remove("bi-x-lg");
    menuIcon.classList.add("bi-list");
});