var clipboard = new ClipboardJS('#mail--tippy');

tippy('#mail--tippy', {
    content: 'Kliknij, aby skopiować adres!',
    theme: 'custom',
  });

  tippy('#mail--tippy', {
    animation: 'shift-toward',
    content: "kliknij, aby skopiować adres...",
    trigger: 'mouseenter',
    offset: [0, 10],
    delay: [0, 100],
    theme: 'custom',
  });
  tippy('#mail--tippy', {
    content: "adres maila został skopiowany!",
    trigger: 'click',
    hideOnClick: false,
    onShow(instance) {
      setTimeout(() => {
        instance.hide();
      }, 1600);
    },
    animation: 'scale-extreme',
    offset: [0, 10],
    theme: 'custom',
  });
