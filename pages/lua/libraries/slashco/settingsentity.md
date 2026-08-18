<function name="SettingsEntity" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the map's settings entity.<br>
		The result is cached after the first successful lookup.
	</description>
	<realm>Server</realm>
	<rets>
		<ret name="ent" type="Entity">The map settings entity or `nil` if none exists</ret>
	</rets>
</function>