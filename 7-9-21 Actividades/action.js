const d = document;

const form = d.getElementById("form");
const modal = d.querySelector(".modal");

form.addEventListener("submit", (e) => {
  e.preventDefault("");

  // Inputs
  const name = d.getElementById("nombre").value;
  const yearOld = d.getElementById("edad").value;
  const date = d.getElementById("fecha").value;

  const modal_name = d.getElementById("modal_nombre");
  const modal_yearOld = d.getElementById("modal_edad");
  const modal_date = d.getElementById("modal_fecha");

  modal_name.innerHTML = `${name}`;
  modal_yearOld.innerHTML = `${yearOld} años`;
  modal_date.innerHTML = `${date}`;

  modal.classList.remove("modal-hidden");
  modal.classList.add("modal-show");
});
