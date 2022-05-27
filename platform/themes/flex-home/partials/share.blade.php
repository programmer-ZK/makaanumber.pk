<div class=" mb-3 pb-2  w-100">
  <span style="font-size:32px; font-weight:bold;" class="ml-3">{{ $title }}</span>

  <style>

  </style>

  <ul class="mb-5 ml-3 share_icons_ul">

    <li class="">
      <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ $description }}" target="_blank" class="share_icon twitter" title="{{ __('Share on Twitter') }}">
        <i class="fab fa-twitter "></i>
      </a>
    </li>

    <li class="">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&title={{ $description }}" target="_blank" class="share_icon facebook" title="{{ __('Share on Facebook') }}">
        <i class="fab fa-facebook-f"></i>
      </a>
    </li>

    <li class="">
      <a href="mailto:?subject={{ $description }}&amp;body={{ urlencode(url()->current()) }}" target="_blank" class="share_icon envelope" title="{{ __('Send Email') }}">
        <i class="fa fa-envelope"></i>
      </a>
    </li>

    <li class="">
      <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}&description={{ $description }}" target="_blank" class="share_icon pinterest" title="{{ __('Share on pinterest') }}">
        <i class="fab fa-pinterest"></i>
      </a>
    </li>

    <li class="">
      <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="share_icon linkedin" title="{{ __('Share on linkedin') }}">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>

  </ul>
</div>

<style>
  .socials ul li a {
    display: block !important;
    color: #fff !important;
    line-height: 35px;
    text-align: center;
    font-size: 15px !important;
  }

  .fab {
    font-family: sans-serif !important;
  }
</style>