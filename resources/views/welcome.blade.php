@extends('layouts.master')
@section('title', 'Início')
@section('content')


<div class="container-fluid d-flex gap-4 justify-content-center">
    <div class="card">
        <div class="card-body text-center">
            <svg style="width: 200px" viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                <g clip-path="url(#clip0)" fill="#EF3B2D">
                    <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                </g>
            </svg>
        </div>
        <div class="card-footer">
            v8.83.23 (PHP v7.4.29)
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <svg  viewBox="0 0 128 128" width="65" height="65" data-v-97393f76="">
                <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z" data-v-97393f76=""></path>
                <path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-97393f76=""></path>
            </svg>
        </div>
        <div class="card-footer">
            v3.2.36
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 204.8 105.765"><path d="M0 96.334h6.747V69.7l10.445 23.227c1.232 2.8 2.92 3.806 6.228 3.806s4.93-.995 6.164-3.806L40.03 69.7v26.644h6.748v-26.6c0-2.595-1.04-3.85-3.18-4.498-5.125-1.6-8.564-.216-10.12 3.244l-10.25 22.923L13.3 68.48c-1.492-3.46-4.995-4.844-10.12-3.244C1.038 65.885 0 67.14 0 69.734v26.6zm52.386-21.686h6.745v14.68c-.063.798.256 2.67 3.952 2.727 1.886.03 14.554 0 14.672 0v-17.48h6.76c.03 0-.007 23.834-.006 23.936.037 5.878-7.294 7.155-10.672 7.254H52.533v-4.54l21.342-.001c4.342-.46 3.83-2.617 3.83-3.344v-1.77h-14.34c-6.672-.06-10.92-2.973-10.973-6.323-.005-.3.144-14.995-.004-15.14z" fill="#00618a"/><path d="M89.716 96.334h19.398c2.27 0 4.477-.475 6.23-1.298 2.92-1.34 4.347-3.157 4.347-5.536v-4.93c0-1.947-1.622-3.763-4.8-4.974-1.687-.65-3.763-.995-5.774-.995h-8.175c-2.724 0-4.022-.822-4.346-2.638-.065-.216-.065-.4-.065-.606v-3.07c0-.173 0-.347.065-.563.324-1.384 1.038-1.774 3.438-2 .195 0 .454-.044.65-.044h19.268v-4.497h-18.944c-2.725 0-4.152.173-5.45.562C91.532 67 89.78 69 89.78 72.46v3.936c0 3.028 3.44 5.623 9.212 6.228.65.043 1.298.086 1.946.086h7.007c.26 0 .52 0 .714.044 2.14.173 3.05.562 3.698 1.34.4.4.52.78.52 1.2v3.936c0 .476-.324 1.082-.973 1.6-.584.52-1.557.865-2.855.952-.26 0-.454.043-.713.043h-18.62v4.498zm72.064-7.828c0 4.628 3.438 7.223 10.38 7.742a29.45 29.45 0 0 0 1.946.086h17.582v-4.498h-17.712c-3.957 0-5.45-.995-5.45-3.374v-23.27h-6.747v23.312zm-37.785.234V72.705c0-4.074 2.86-6.545 8.516-7.325a12.94 12.94 0 0 1 1.821-.13h12.807a13.87 13.87 0 0 1 1.886.13c5.656.78 8.516 3.25 8.516 7.325V88.74c0 3.305-1.215 5.074-4.015 6.227l6.646 6h-7.834l-5.377-4.854-5.413.343h-7.216c-1.235 0-2.535-.174-3.966-.564-4.3-1.17-6.37-3.424-6.37-7.152zm7.283-.4c0 .217.065.433.13.694.4 1.864 2.145 2.904 4.8 2.904h6.13l-5.63-5.083h7.834l4.9 4.433c.905-.482 1.5-1.22 1.7-2.167.065-.216.065-.433.065-.65V73.096c0-.173 0-.4-.065-.607-.4-1.733-2.146-2.73-4.746-2.73H136.22c-3 0-4.94 1.3-4.94 3.337v15.256z" fill="#e48e00"/><g fill="#00618a"><path d="M197.624 57.73c-4.147-.112-7.316.273-10.024 1.415-.77.325-1.997.333-2.123 1.298.423.443.49 1.105.825 1.65.647 1.047 1.74 2.45 2.713 3.184 1.064.803 2.16 1.663 3.303 2.36 2.03 1.238 4.296 1.945 6.25 3.184 1.152.73 2.296 1.65 3.42 2.476.555.408.93 1.042 1.65 1.297v-.118c-.38-.483-.477-1.147-.825-1.65l-1.533-1.533c-1.5-2-3.402-3.737-5.425-5.19-1.613-1.158-5.224-2.722-5.897-4.6l-.118-.118c1.144-.13 2.483-.543 3.54-.825 1.773-.475 3.358-.353 5.19-.825l2.477-.708v-.472c-.926-.95-1.586-2.207-2.595-3.066-2.64-2.25-5.523-4.495-8.49-6.37-1.646-1.04-3.68-1.714-5.425-2.595-.587-.296-1.618-.45-2.005-.944-.916-1.168-1.415-2.65-2.122-4-1.48-2.85-2.934-5.964-4.246-8.963-.895-2.045-1.48-4.062-2.594-5.897-5.355-8.804-11.12-14.118-20.048-19.34-1.9-1.11-4.187-1.55-6.605-2.123l-3.892-.236c-.792-.33-1.616-1.3-2.36-1.77-2.958-1.87-10.545-5.933-12.736-.6-1.383 3.373 2.067 6.664 3.302 8.374.866 1.2 1.976 2.543 2.594 3.892.407.886.478 1.775.826 2.713.857 2.3 1.603 4.823 2.712 6.958.56 1.08 1.178 2.218 1.887 3.184.435.593 1.18.854 1.297 1.77-.728 1.02-.77 2.6-1.18 3.892-1.843 5.812-1.148 13.035 1.533 17.337.823 1.32 2.76 4.152 5.425 3.066 2.33-.95 1.8-3.89 2.477-6.486.15-.59.058-1.02.354-1.415v.118l2.123 4.245c1.57 2.53 4.36 5.175 6.722 6.96 1.225.925 2.2 2.525 3.774 3.066v-.118h-.118c-.307-.48-.787-.677-1.18-1.06-.923-.905-1.95-2.03-2.713-3.066-2.15-2.918-4.048-6.11-5.778-9.435-.826-1.587-1.545-3.338-2.24-4.953-.268-.623-.265-1.564-.825-1.887-.763 1.184-1.887 2.14-2.477 3.538-.944 2.234-1.066 4.958-1.415 7.784-.207.074-.115.023-.236.118-1.642-.396-2.22-2.087-2.83-3.538-1.544-3.67-1.83-9.576-.472-13.798.35-1.092 1.94-4.534 1.297-5.543-.307-1.007-1.32-1.6-1.887-2.36-.7-.95-1.402-2.204-1.887-3.302-1.264-2.86-1.854-6.07-3.184-8.963-.636-1.382-1.71-2.78-2.594-4-.978-1.36-2.073-2.364-2.83-4-.27-.585-.636-1.52-.236-2.123a.93.93 0 0 1 .708-.708c.684-.527 2.59.175 3.302.472 1.89.786 3.47 1.534 5.072 2.595.77.5 1.547 1.496 2.476 1.77h1.06c1.66.382 3.52.12 5.07.59 2.742.833 5.198 2.13 7.43 3.538 6.798 4.292 12.355 10.402 16.157 17.7.612 1.173.876 2.294 1.415 3.538 1.087 2.5 2.456 5.093 3.538 7.547 1.08 2.45 2.13 4.92 3.656 6.958.802 1.07 3.9 1.646 5.307 2.24.987.417 2.603.852 3.538 1.415 1.785 1.077 3.515 2.36 5.19 3.54.837.59 3.41 1.883 3.538 2.948z"/><path d="M144.91 12.798c-.865-.016-1.476.094-2.123.236v.118h.118c.412.848 1.14 1.393 1.65 2.123l1.18 2.476.118-.118c.73-.515 1.065-1.338 1.06-2.595-.293-.308-.336-.694-.59-1.062-.337-.49-1-.768-1.415-1.18z" fill-rule="evenodd"/></g><path d="M194.855 91.708c0 2.97 2.347 4.972 4.972 4.972s4.972-2.002 4.972-4.972-2.347-4.972-4.972-4.972-4.972 2.002-4.972 4.972zm8.83 0c0 2.254-1.723 3.938-3.86 3.938-2.16 0-3.86-1.684-3.86-3.938s1.698-3.938 3.86-3.938c2.135 0 3.86 1.684 3.86 3.938zm-2.52 2.838h1.113l-1.63-2.492c.875-.093 1.537-.518 1.537-1.552 0-1.154-.73-1.63-2.134-1.63h-2.215v5.675h.955v-2.453h.888l1.485 2.453zm-2.374-3.25v-1.63h1.1c.57 0 1.26.106 1.26.77 0 .795-.623.862-1.34.862h-1.02z" fill="#e48e00" fill-rule="evenodd"/></svg>
        </div>
        <div class="card-footer">
            v15.1 Dist10.4.24-MariaDB
        </div>
    </div>
</div>

@endsection
