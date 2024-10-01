// Donation buttons function
const donationButtons = document.querySelectorAll('.donation .amounts button');
const customAmountInput = document.querySelector('.custom-amount');
const donateBtn = document.querySelector('.donate-btn');

donationButtons.forEach(button => {
    button.addEventListener('click', () => {
        const amount = button.textContent.replace('Rs.', '');
        customAmountInput.value = amount;
    });
});

donateBtn.addEventListener('click', () => {
    const amount = customAmountInput.value;
    if (amount) {
        alert(`Thank you for your donation of Rs.${amount}!`);
        // we will redirect user to payment gateway gpay, razorpay ,etc.
    } else {
        alert('Please enter a donation amount.');
    }
});
