import IndexField from './components/Permission'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((Vue, router) => {
  Vue.component('index-permission-checkboxes', IndexField)
  Vue.component('detail-permission-checkboxes', DetailField)
  Vue.component('form-permission-checkboxes', FormField)
})