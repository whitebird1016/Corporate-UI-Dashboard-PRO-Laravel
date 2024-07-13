import './bootstrap';

alert = document.getElementById('alert');
if (alert) {
    setTimeout(() => {
        alert.remove();
    }, 3000);
}

const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
    searchable: true,
    fixedHeight: true
});

if (document.getElementById('choices-button')) {
    var element = document.getElementById('choices-button');
    const example = new Choices(element, {});
}

