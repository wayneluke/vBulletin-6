# MIME types

vBulletin allows the upload of file attachments. Servers and browsers generally recognize the type of file using two methods; file extensions and MIME types. This document is to allow you to match extensions with MIME types so they are properly handled by browsers.

## Media

### Images

| Default | Extension  |  Mimetype | Name |
|---|---|---|---|
| X | .bpm | image/bmp | Windows OS/2 Bitmap Graphics
| X | .gif | image/gif| Graphics Interchange Format |
|   | .heic, .heif | image/heic | High Efficiency Image Format |
|   | .ico | image/vnd.microsoft.icon | Icon Format |
| X | .jpg, .jpeg | image/jpeg| JPEG Images |
| X | .png | image/png | Portable Network Graphics |
| X | .psd | image/psd | image/psd or image/vnd.adobe.photoshop |
|   | .raw | image/x-cdraw | Generic Raw Image type.<sup>*</sup> |
|   | .svg | image/svg+xml | Scalable Vector Graphics |
| X | .tif, .tiff | image/tiff | Tagged Image File Format (TIFF) |
| X | .webp | image/webp  | WEBP image |

<sup>*</sup> Different camera manufacturers have their own variations of this file type.

Formats marked as default will be processed as images by vBulletin. This allows resizing and inline insertion. If it is not a default image type, then it can still be uploaded but will be considered a standard file. When inserted inline, it will only display a link that opens in a new tab.

### Video

| Default | Extension  |  Mimetype | Name |
|---|---|---|---|
|   | .avi | video/x-msvideo | Audio Interleave Video |
|   | .mkv | video/x-matroska | Matroska Video Files |
|   | .mov | video/quicktime | Apple Quicktime Movie |
| X | .mp4 | video/mp4 | MP4 video |
|   | .mpeg | video/mpeg | MPEG Video |
|   | .ogv | video/ogg | OGG Video |
|   | .webm | video/webm | WebM Video |

Attachments using a video mimetype can be inserted inline and a video player will be shown. However, not all video formats will be available on all devices or browsers.

These file types above are generally seen as containers and may have multiple media streams of video, audio, and even sub-titles embedded. You can specify different codecs to use as part of the mimetype if you are providing video content. Please view this article on using [Codecs in Common Media Types](https://developer.mozilla.org/en-US/docs/Web/Media/Formats/codecs_parameter)


### Audio

| Default | Extension  |  Mimetype | Name |
|---|---|---|---|
|   | .aac | audio/aac | Advanced Audio Coding |
|   | .mid, .midi | audio/midi, audio/x-midi | Musical Instrument Digital Interface |
| X | .mp3 | audio/mpeg | MP3 Audio |
|   | .oga | audio/ogg | OGG Audio |
|   | .wav | audio/wav | Waveform Audio Format |
|   | .weba | audio/webm | WEBM Audio |

Note: Attachments using an audio mimetype will be shown with an audio player in the attachment panel of the post. If inserted inline, they will only provide a link to download the file.

## Files

### Text Files

| Default | Extension  |  Mimetype | Name
|---|---|---|---|
|   | .cvs | text/cvs | Comma Separated Values |
|   | .html | text/html | HyperText Markup Language |
|   | .ics | text/calendar | iCalendar Format |
|   | .md | text/markdown | Markdown File |
|   | .sh | application/x-sh | Bourne Shell Script |
| X | .txt | text/plain | Generally ASCII or ISO-8859-n plain text files |
|   | .xml | application/xml, text/xml | Extensible Markup Language |

### Office Applications

| Default | Extension  |  Mimetype | Name |
|---|---|---|---|
| X | .doc | application/msword | Microsoft Word |
| X | .docx | application/vnd.openxmlformats-officedocument.wordprocessingml.document | Microsoft Word (OpenXML)|
|   | .epub | application/epub+zip | Electronic Publication |
|   | .odp | application/vnd.oasis.opendocument.presentation | OpenDocument Presentation |
|   | .ods | application/vnd.oasis.opendocument.spreadsheet | OpenDocument Spreadsheet |
|   | .odt | application/vnd.oasis.opendocument.text | OpenDocument Text Document |
|   | .pdf | application/pdf | Adobe Portable Document Format |
|   | .ppt | application/vnd.ms-powerpoint | Microsoft Powerpoint |
|   | .pptx | application/vnd.openxmlformats-officedocument.presentationml.presentation | Microsoft Powerpoint (OpenXML) |
|   | .xls | application/vnd.ms-excel | Microsoft Excel |
|   | .xlsx | application/vnd.openxmlformats-officedocument.spreadsheetml.sheet | Microsoft Excel (OpenXML) |


### Compressed Archives

| Default | Extension  |  Mimetype | Name |
|---|---|---|---|
|   | .7z | application/x-7z-compressed | 7-Zip Archive |
|   | .bz2 | application/x-bzip2 | BZip2 Archive |
|   | .gz | application/gzip | GZip Compressed Archive |
|   | .rar | application/vnd.rar | RAR Archive |
|   | .tar | application/x-tar | Tape ARchive.
| X | .zip | application/zip | ZIP Archive |


## More File Types

To find the mimetypes for additional file types see these two links:

- [Common MIME Types](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types)
- [MIME type Detector](https://mimetype.io/)
- [All MIME Types](https://mimetype.io/all-types)