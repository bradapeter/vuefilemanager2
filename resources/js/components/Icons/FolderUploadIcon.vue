<template>
    <svg
        class="preview-list-icon"
        fill="none"
        stroke="currentColor"
        stroke-width="1.5"
        fill-rule="evenodd"
        stroke-linecap="round"
        stroke-linejoin="round"
        :width="`${size}px`"
        :height="`${size}px`"
        viewBox="0 -2 14 17"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
    >
        <path
            d="M0,10.6420028 C0,8.60583431 0,5.5515816 0,1.47924466 C0,0.662280392 0.633305625,0 1.4145277,0 L4.95084696,0 L6.36537467,2.21886699 L12.7307493,2.21886699 C13.5119714,2.21886699 14.145277,2.88114738 14.145277,3.69811164 C14.145277,7.76603445 14.145277,7.76603445 14.145277,11.8339573 C14.145277,12.6509215 13.5119714,13.3132019 12.7307493,13.3132019 C11.9928651,13.3132019 12.1671651,13.3132019 11.798223,13.3132019"
            id="Path"
        ></path>
        <polyline id="Path-Copy-8" points="9.49893123 9.53496452 6.74946561 6.60112928 4 9.53496452"></polyline>
        <line x1="6.74946561" y1="6.60112928" x2="6.74946561" y2="13.2022586" id="Path-Copy-7"></line>
    </svg>
</template>

<script>
export default {
    props: ['size'],
}
</script>

<style lang="scss">
.preview-list-icon {
    path,
    line,
    polyline {
        color: inherit;
    }
}
</style>
