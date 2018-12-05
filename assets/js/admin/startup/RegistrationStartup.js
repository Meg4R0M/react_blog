import ReactOnRails from 'react-on-rails'
import Dashboard from './DashboardStartup'
import Admin from './AdminStartup'
import configureStore from '../store/ConfigureStore'

const dashboardStore = configureStore
const articlesStore = configureStore

ReactOnRails.register({ Dashboard })
ReactOnRails.registerStore({ dashboardAdminStore: dashboardStore })

ReactOnRails.register({ Admin })
ReactOnRails.registerStore({ articlesAdminStore: articlesStore })