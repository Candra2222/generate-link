export default function handler(req, res) {
  if (req.method !== 'POST') {
    return res.status(405).json({ error: 'Method not allowed' });
  }

  const { base } = req.body;

  if (!base) {
    return res.status(400).json({
      error: 'base link wajib diisi'
    });
  }

  const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  let kode = '';
  for (let i = 0; i < 10; i++) {
    kode += chars[Math.floor(Math.random() * chars.length)];
  }

  const link = `${base}?${kode}`;
  res.status(200).json({ link });
}
