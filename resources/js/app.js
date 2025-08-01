import { TextareaAutoSize } from 'textarea-autosize'

document.addEventListener('DOMContentLoaded', () => {
    const textareas = document.querySelectorAll('textarea[data-autosize]')
    textareas.forEach((el) => new TextareaAutoSize(el))
})
