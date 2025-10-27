# Quick Start Guide - Remove URL Prefixes Feature

## 🎯 Overview

This feature adds an admin toggle to remove URL prefixes (`/catalog/`, `/information/`, etc.) for cleaner, SEO-friendly URLs.

---

## ⚡ Quick Setup (5 Minutes)

### Step 1: Run SQL Migration
```sql
-- Open sql_migration_clean_urls.sql
-- Replace 'oc_' with your database prefix
-- Execute in phpMyAdmin or MySQL client
```

### Step 2: Clear Cache
```
Admin → Extensions → Modifications → Click Refresh button
```

### Step 3: Enable Feature
```
1. Go to Admin → Settings → Settings
2. Click the "Server" tab
3. Find "Remove URL Prefixes"
4. Toggle to "Yes"
5. Click "Save"
```

### Step 4: Clear Cache Again
```
Admin → Extensions → Modifications → Click Refresh button
```

### Step 5: Test
Visit your store and check that URLs are now clean without prefixes.

---

## 📍 Setting Location

**Path:** Admin → Settings → Settings → Server Tab  
**Setting:** Remove URL Prefixes  
**Database Key:** `config_remove_url_prefixes`  
**Default:** Off (disabled)

---

## 🔄 What Changes

### Before (Disabled):
- Product URLs: `/catalog/laptops`
- Category URLs: `/catalog/electronics`
- Info Pages: `/information/about-us`

### After (Enabled):
- Product URLs: `/laptops`
- Category URLs: `/electronics`
- Info Pages: `/about-us`

### Automatic Redirects:
Old URLs automatically redirect (301) to new clean URLs:
- `/catalog/laptops` → `/laptops`
- `/information/about-us` → `/about-us`

---

## ✅ Key Features

1. **Dynamic Toggle** - No code changes needed
2. **301 Redirects** - Preserves SEO rankings
3. **Backward Compatible** - Can disable anytime
4. **Modular** - Easy to extend with new prefixes
5. **Admin Friendly** - Simple toggle switch

---

## 🛠️ Configuration

### Enable Clean URLs:
```
config_remove_url_prefixes = 1
```

### Disable Clean URLs:
```
config_remove_url_prefixes = 0
```

---

## 📝 Database Table

**Setting stored in:** `oc_setting` table  
**Key:** `config_remove_url_prefixes`  
**Value:** `0` or `1`

---

## 🧪 Testing

### Test 1: Check URLs
```bash
# Visit your store
# Browse products, categories, information pages
# Verify URLs are clean (no /catalog/ prefix)
```

### Test 2: Check Redirects
```bash
# Try old URL format
# http://localhost/www/opencartly/catalog/laptops
# Should redirect to: /laptops
# Status: 301 (Permanent Redirect)
```

### Test 3: Check Setting
```bash
# Visit: http://localhost/www/opencartly/admin
# Settings → Settings → Server
# Verify "Remove URL Prefixes" toggle exists
```

---

## 🔙 Rollback

### To Disable:
1. Admin → Settings → Settings → Server
2. Toggle "Remove URL Prefixes" to **No**
3. Save
4. Clear cache

### To Restore Database:
```sql
-- Use your backup if needed
-- Or re-run SQL migration with opposite values
```

---

## 🐛 Troubleshooting

| Issue | Solution |
|-------|----------|
| URLs still show prefix | Clear cache (Modifications → Refresh) |
| 404 errors | Check .htaccess exists in root |
| Setting not saving | Check admin permissions |
| No redirects | Verify mod_rewrite is enabled |

---

## 📚 Additional Documentation

- **Full README:** `SEO_URL_ENHANCEMENT_README.md`
- **Implementation Summary:** `IMPLEMENTATION_SUMMARY.md`
- **SQL Migration:** `sql_migration_clean_urls.sql`

---

## 🎉 Success Criteria

✅ Setting appears in admin  
✅ Can toggle on/off  
✅ URLs change when enabled  
✅ Old URLs redirect (301)  
✅ No 404 errors  
✅ Cache clears properly  

---

**Ready to go!** 🚀

