export default function handler(req, res) {
  const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  let kode = '';
  for (let i = 0; i < 10; i++) {
    kode += chars[Math.floor(Math.random() * chars.length)];
  }

  const link = `https://content-show-live.vercel.app/?${kode}`;
  res.status(200).json({ link });
}
