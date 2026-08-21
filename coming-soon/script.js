(() => {
  const root = document.documentElement;
  let frame = 0;

  const dial = document.querySelector('.timepiece-case');
  if (dial) {
    const hourHand = dial.querySelector('.hand-hour');
    const minuteHand = dial.querySelector('.hand-minute');
    const secondHand = dial.querySelector('.hand-second');
    const indiaClock = new Intl.DateTimeFormat('en-GB', {
      timeZone: 'Asia/Kolkata',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hourCycle: 'h23'
    });

    let labelledSecond = -1;
    const updateIndiaTime = () => {
      const now = new Date();
      const indiaTime = new Date(now.getTime() + (330 * 60 * 1000));
      const seconds = indiaTime.getUTCSeconds() + indiaTime.getUTCMilliseconds() / 1000;
      const minutes = indiaTime.getUTCMinutes() + seconds / 60;
      const hours = (indiaTime.getUTCHours() % 12) + minutes / 60;
      hourHand.style.transform = `translateX(-50%) rotate(${hours * 30}deg)`;
      minuteHand.style.transform = `translateX(-50%) rotate(${minutes * 6}deg)`;
      secondHand.style.transform = `translateX(-50%) rotate(${seconds * 6}deg)`;
      dial.classList.add('is-live');
      if (indiaTime.getUTCSeconds() !== labelledSecond) {
        labelledSecond = indiaTime.getUTCSeconds();
        dial.setAttribute('aria-label', `Indian Standard Time: ${indiaClock.format(now)}`);
      }
      window.requestAnimationFrame(updateIndiaTime);
    };

    window.requestAnimationFrame(updateIndiaTime);
  }

  document.addEventListener('pointermove', event => {
    if (frame || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    frame = requestAnimationFrame(() => {
      root.style.setProperty('--light-x', `${(event.clientX / innerWidth) * 100}%`);
      root.style.setProperty('--light-y', `${(event.clientY / innerHeight) * 100}%`);
      frame = 0;
    });
  });
})();
