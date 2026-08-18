<function name="GetBannedSlashers" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a table containing all banned slashers
	</description>
	<realm>Server</realm>
	<args>
		<arg name="onlyReversed" type="boolean" default="nil">
			If `true` then the result table will only contain `slasherName = true`
		</arg>
	</args>
	<rets>
		<ret name="bannedSlashers" type="table">
			The table is both sequential and reversed.<br>
			This means you should use `ipairs` to iterate as with `pairs` you would hit the reversed entries.<br>
		</ret>
	</rets>
</function>