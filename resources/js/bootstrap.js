import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import {string_to_unicode_variant} from "string-to-unicode-variant";
window.toUnicodeVariant = string_to_unicode_variant;
