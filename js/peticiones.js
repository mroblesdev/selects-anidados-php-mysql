const cbxEstado = document.getElementById('estado')
cbxEstado.addEventListener("change", getMunicipios)

const cbxMunicipio = document.getElementById('municipio')
cbxMunicipio.addEventListener("change", getLocalidades)

const cbxLocalidad = document.getElementById('localidad')

function fetchAndSetData(url, formData, targetElement) {
    return fetch(url, {
        method: "POST",
        body: formData,
        mode: 'cors'
    })
        .then(response => response.json())
        .then(data => {
            targetElement.innerHTML = data;
        })
        .catch(err => console.log(err));
}

function getMunicipios() {
    let estado = cbxEstado.value;
    let url = 'inc/getMunicipios.php';
    let formData = new FormData();
    formData.append('id_estado', estado);

    fetchAndSetData(url, formData, cbxMunicipio)
        .then(() => {
            cbxLocalidad.innerHTML = ''
            let defaultOption = document.createElement('option');
            defaultOption.value = 0;
            defaultOption.innerHTML = "Seleccionar";
            cbxLocalidad.appendChild(defaultOption);
        })
        .catch(err => console.log(err));
}

function getLocalidades() {
    let municipio = cbxMunicipio.value;
    let url = 'inc/getLocalidades.php';
    let formData = new FormData();
    formData.append('id_municipio', municipio);

    fetchAndSetData(url, formData, cbxLocalidad)
        .catch(err => console.log(err));
}