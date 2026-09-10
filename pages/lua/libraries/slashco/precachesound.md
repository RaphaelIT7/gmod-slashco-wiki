<function name="PrecacheSound" parent="SlashCo" type="libraryfunc">
	<description>
		Precaches a sound and remembers it in an internal table so it isn't precached again, e.g. after an autorefresh.
		<note>
			The current implementation internally calls `util.PrecacheModel` instead of `util.PrecacheSound` - this looks like a bug in the existing code.
		</note>
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="soundName" type="string">The sound path to precache.</arg>
	</args>
</function>