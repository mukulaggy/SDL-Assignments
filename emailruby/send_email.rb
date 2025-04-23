# send_email.rb
require 'mail'
require 'dotenv/load'

def send_email(to, subject, body)
  smtp_settings = {
    address:              ENV['SMTP_ADDRESS'] || 'smtp.gmail.com',
    port:                 ENV['SMTP_PORT'] || 587,
    domain:               ENV['SMTP_DOMAIN'] || 'gmail.com',  # Changed to gmail.com
    user_name:            ENV['EMAIL_USERNAME'],
    password:             ENV['EMAIL_PASSWORD'],
    authentication:       :login,  # Changed from 'plain' to :login
    enable_starttls_auto: true,
    openssl_verify_mode:  'none'  # For development only
  }

  Mail.defaults { delivery_method :smtp, smtp_settings }

  mail = Mail.new do
    from    ENV['EMAIL_USERNAME']
    to      to
    subject subject
    body    body
  end

  begin
    mail.deliver!
    puts "✅ Email sent to #{to}"
  rescue Net::SMTPAuthenticationError => e
    puts "❌ Authentication failed:"
    puts "1. Make sure you're using an App Password (not your Gmail password)"
    puts "2. Verify 2-Step Verification is enabled"
    puts "3. Check your .env file has correct credentials"
    puts "Full error: #{e.message}"
  rescue StandardError => e
    puts "❌ Error sending email: #{e.message}"
  end
end

if __FILE__ == $0
  unless ENV['EMAIL_USERNAME'] && ENV['EMAIL_PASSWORD']
    puts "⚠️  Please create a .env file with your credentials"
    exit
  end

  puts "📧 Ruby Email Sender"
  print "Recipient email: "
  recipient = gets.chomp
  print "Subject: "
  subject = gets.chomp
  print "Message body: "
  body = gets.chomp

  send_email(recipient, subject, body)
end