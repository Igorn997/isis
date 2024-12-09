$(function () {
  $(".language-menu").on("click", ".language-option", function (e) {
    e.preventDefault();

    const selectedLang = $(this).data("lang");
    const fullLangName = $(this).data("full");
    const href = $(this).attr("href");

    $(".current-language").text(selectedLang).data("lang", selectedLang);

    const otherLang = selectedLang === "SRB" ? "ENG" : "SRB";
    const otherLangFull = selectedLang === "SRB" ? "Engleski" : "Srpski";
    $(".language-menu").html(`
      <a href="#sr" class="language-option" data-lang="${selectedLang}" data-full="${fullLangName}">
        ${fullLangName}
      </a>
      <a href="#en" class="language-option" data-lang="${otherLang}" data-full="${otherLangFull}">
        ${otherLangFull}
      </a>
    `);

    window.location.href = href;
  });
});
