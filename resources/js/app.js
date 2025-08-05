import { TextareaAutoSize } from 'textarea-autosize'

document.addEventListener('DOMContentLoaded', () => {
    const textareas = document.querySelectorAll('textarea[data-autosize]')
    textareas.forEach((el) => new TextareaAutoSize(el))
})


import Sortable from 'sortablejs'

document.addEventListener('DOMContentLoaded', () => {
    // get all .sortable-list elements
    const el = document.querySelectorAll('.sortable-list');
    el.forEach((element) => {
        Sortable.create(element, {
            animation: 150,
        })
    })
})


