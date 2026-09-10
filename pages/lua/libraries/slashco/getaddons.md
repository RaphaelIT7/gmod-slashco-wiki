<function name="GetAddons" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the table of currently registered SlashCo workshop addons.<br>
		Keys are the addon's workshop ID (or a negative placeholder ID for legacy addons found in the local `addons/` folder), values are the addon's title.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<rets>
		<ret name="addons" type="table">Table of registered SlashCo addons.</ret>
	</rets>
</function>