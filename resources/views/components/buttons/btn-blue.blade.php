@props(['title',
        'id'])

    <button class="btn-blue" id="{{ $id }}">
        <p class="btn-blue__title">
            {{ $title }}
        </p>
        <svg class="btn-blue__icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.6551 15C23.6551 14.6987 23.5547 14.4475 23.3538 14.2466L21.8303 12.7232L15.7701 6.66294C15.5692 6.46205 15.318 6.3616 15.0167 6.3616C14.7154 6.3616 14.4643 6.46205 14.2634 6.66294L12.7399 8.18638C12.539 8.38727 12.4386 8.63839 12.4386 8.93973C12.4386 9.24107 12.539 9.49218 12.7399 9.69308L15.904 12.8571H7.49997C7.20979 12.8571 6.95867 12.9632 6.74662 13.1752C6.53456 13.3873 6.42854 13.6384 6.42854 13.9286V16.0714C6.42854 16.3616 6.53456 16.6127 6.74662 16.8248C6.95867 17.0368 7.20979 17.1429 7.49997 17.1429H15.904L12.7399 20.3069C12.5279 20.519 12.4218 20.7701 12.4218 21.0603C12.4218 21.3504 12.5279 21.6016 12.7399 21.8136L14.2634 23.3371C14.4643 23.5379 14.7154 23.6384 15.0167 23.6384C15.318 23.6384 15.5692 23.5379 15.7701 23.3371L21.8303 17.2768L23.3538 15.7533C23.5547 15.5525 23.6551 15.3013 23.6551 15ZM27.8571 15C27.8571 17.3326 27.2823 19.4838 26.1328 21.4537C24.9832 23.4235 23.4235 24.9833 21.4536 26.1328C19.4838 27.2824 17.3326 27.8571 15 27.8571C12.6674 27.8571 10.5161 27.2824 8.54628 26.1328C6.57642 24.9833 5.01671 23.4235 3.86715 21.4537C2.7176 19.4838 2.14282 17.3326 2.14282 15C2.14282 12.6674 2.7176 10.5162 3.86715 8.54631C5.01671 6.57645 6.57642 5.01674 8.54628 3.86718C10.5161 2.71763 12.6674 2.14285 15 2.14285C17.3326 2.14285 19.4838 2.71763 21.4536 3.86718C23.4235 5.01674 24.9832 6.57645 26.1328 8.54631C27.2823 10.5162 27.8571 12.6674 27.8571 15Z" fill="white"/>
        </svg>
    </button>
