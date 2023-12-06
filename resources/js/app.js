import './bootstrap';

import { Dropzone } from "dropzone";
const dropzone = new Dropzone("#previews", { url: "/file/post" });
