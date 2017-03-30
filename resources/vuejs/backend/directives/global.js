import Vue from 'vue'

const href = {
    bind(el, binding) {
        let preview = binding.value.preview
        preview ? el.href = "javascript:;" : el.href = binding.value
    }
}


export {
    href
}