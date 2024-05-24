const createFile = (id_file) => {
  document.getElementById(id_file).value = "";
  document.getElementById(id_file).click();
};

const _listenChange = (file, container_file, section_upload_img, myModal, myModalImg) => {
  console.log('Este es el file: ', file)
  console.log('Este es el container_file: ', container_file)
  console.log('Este es el section_upload: ', section_upload_img)
  console.log('Este es el myModal: ', myModal)
  console.log('Este es el myModalImg: ', myModalImg)
 
  if (file.target.files.length == 0) {
    return;
  }
  _createPreview(file.target.files[0], container_file, section_upload_img, myModal, myModalImg);
};

const _createPreview = (file, container_file, section_id, myModal, myModalImg) => {
  let size;
  if (file.size < 1024) {
    size = `${file.size} b`;
  } else if (file.size < 1024 * 1024) {
    size = `${(file.size / 1024).toFixed(2)} kb`;
  } else {
    size = `${(file.size / (1024 * 1024)).toFixed(2)} mb`;
  }

  let div_relative = el(
    "div.relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50"
  );

  let div_img = el(
    "div.w-12 h-12 rounded-full bg-gray-100 flex-shrink-0 cursor-pointer"
  );
  let img = el("img.w-12 h-12 object-cover rounded-full");

  let div_text = el("div.text-left w-full ms-2");
  let h6 = el("h6.text-md", "Archivo cargado");
  let div_size = el(
    "div.flex justify-between items-center text-gray-500 text-sm"
  );
  let p_name = el("p.mb_0", file.name);
  let small_size = el("small", el("b", `Tamaño: ${size}`));

  let button = el(
    "button.absolute text-xs p-2 top-0 right-0 hover:bg-gray-100",
    "Cerrar"
  );

  button.addEventListener("click", (e) => {
    e.preventDefault();
    document.getElementById(container_file).innerHTML = "";
    document.getElementById(section_id).style.display = "block";
  });

  mount(div_img, img);
  mount(div_relative, div_img);

  mount(div_text, h6);
  mount(div_size, p_name);
  mount(div_size, small_size);
  mount(div_text, div_size);
  mount(div_relative, div_text);

  mount(div_relative, button);

  var reader = new FileReader();
  reader.onload = function (e) {
    img.setAttribute("src", e.target.result);
    img.addEventListener("click", () => {
      openModal(myModal, myModalImg, e.target.result);
    });
  };
  reader.readAsDataURL(file);
  mount(document.getElementById(container_file), div_relative);

  document.getElementById(section_id).style.display = "none";
  document.getElementById(container_file).style.display = "block";
};

const openModal = (myModal, modalImg, src) => {
    document.getElementById(myModal).style.display = "block";
    document.getElementById(modalImg).src = src;
    document.body.classList.add('modal-open');
}
